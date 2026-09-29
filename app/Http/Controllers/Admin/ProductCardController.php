<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductCardController extends Controller
{
    public function index()
    {
        return view('admin.product-cards.index', [
            'cards' => ProductCard::query()->orderBy('sort_order')->paginate(12),
        ]);
    }

    public function create()
    {
        return view('admin.product-cards.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validatedPayload($request);
        $validated['image'] = $this->storeImage($request);

        ProductCard::query()->create($validated);

        return redirect()
            ->route('admin.product-cards.index')
            ->with('status', 'Карточка успешно добавлена.');
    }

    public function edit(ProductCard $productCard)
    {
        return view('admin.product-cards.edit', ['card' => $productCard]);
    }

    public function update(Request $request, ProductCard $productCard)
    {
        $validated = $this->validatedPayload($request, true);
        $newImage = $this->storeImage($request);

        if ($newImage) {
            if ($productCard->image && ! str_starts_with($productCard->image, 'http')) {
                Storage::disk('public')->delete($productCard->image);
            }

            $validated['image'] = $newImage;
        }

        $productCard->update($validated);

        return redirect()
            ->route('admin.product-cards.index')
            ->with('status', 'Карточка успешно обновлена.');
    }

    public function destroy(ProductCard $productCard)
    {
        if ($productCard->image && ! str_starts_with($productCard->image, 'http')) {
            Storage::disk('public')->delete($productCard->image);
        }

        $productCard->delete();

        return redirect()
            ->route('admin.product-cards.index')
            ->with('status', 'Карточка удалена.');
    }

    private function validatedPayload(Request $request, bool $isUpdate = false): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:2000'],
            'price' => ['required', 'numeric', 'min:0'],
            'sort_order' => ['required', 'integer', 'min:0'],
            'image' => [$isUpdate ? 'nullable' : 'required', 'nullable', 'image', 'max:4096'],
        ]);
    }

    private function storeImage(Request $request): ?string
    {
        $file = $request->file('image');
        if (! $file) {
            return null;
        }

        return $file->store('product-cards', 'public');
    }
}
