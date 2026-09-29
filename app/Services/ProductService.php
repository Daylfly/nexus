<?php
namespace App\Services;
use App\DTOs\ProductData;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;
class ProductService {
    /**
     * Создание товара с гарантированным удалением загруженного файла при сбое.
     */
    public function createProduct(ProductData $dto): Product {
        $imgPath = $dto->image
            ? $dto->image->store('products', 'public')
            : 'products/placeholder.jpg';
        try {
            return DB::transaction(function () use ($dto, $imgPath) {
                return Product::create([
                    'category_id' => $dto->categoryId,
                    'title' => $dto->title,
                    'description' => $dto->description,
                    'price' => $dto->price,
                    'image_path' => $imgPath,
                ]);
            });
        } catch (Throwable $e) {
            $this->deleteImage($imgPath);
            throw $e;
        }
    }
    /**
     * Безопасное обновление товара с заменением изображения в Storage.
     */
    public function updateProduct(Product $product, ProductData $dto): bool {
        return DB::transaction(function () use ($product, $dto) {
            $oldImagePath = $product->image_path;
            $data = [
                'category_id' => $dto->categoryId,
                'title' => $dto->title,
                'description' => $dto->description,
                'price' => $dto->price,
            ];
            if ($dto->image) {
                $data['image_path'] = $dto->image->store('products', 'public');
            }
            $updated = $product->update($data);
            if ($updated && $dto->image) {
                $this->deleteImage($oldImagePath);
            }
            return $updated;
        });
    }
    /**
     * Удаление сущности товара и физическое удаление изображения с диска.
     */
    public function deleteProduct(Product $product): ?bool {
        return DB::transaction(function () use ($product) {
            $image = $product->image_path;
            $deleted = $product->delete();
            if ($deleted) {
                $this->deleteImage($image);
            }

            return $deleted;
        });
    }

    private function deleteImage(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
