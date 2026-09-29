<?php
namespace App\Http\Controllers;
use App\DTOs\ProductData;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
class ProductController extends Controller {
    /**
     * Внедрение сервиса через Dependency Injection в конструкторе.
     */
    public function __construct(protected ProductService $service) {}
    public function index(Request $req) {
        $products = Product::with('category')
            ->filter($req->only('category_id'))
            ->latest()
            ->paginate(12)->withQueryString();
        $categories = Category::all();
        return view('products.index', compact('products', 'categories'));
    }
    public function create() {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }
    public function store(StoreProductRequest $req) {
        $dto = ProductData::fromStoreRequest($req);
        $this->service->createProduct($dto);
        return redirect()->route('products.index')
            ->with('success', 'Товар успешно добавлен!');
    }
    public function show(Product $product) {
        $product->load('category');
        return view('products.show', compact('product'));
    }
    public function edit(Product $product) {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }
    public function update(UpdateProductRequest $req, Product $product) {
        $dto = ProductData::fromUpdateRequest($req);
        $this->service->updateProduct($product, $dto);
        return redirect()->route('products.show', $product)
            ->with('success', 'Товар успешно обновлен!');
    }
    public function destroy(Product $product) {
        $this->service->deleteProduct($product);
        return redirect()->route('products.index')
            ->with('success', 'Товар и файл картинки успешно удалены!');
    }
}
