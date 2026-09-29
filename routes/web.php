<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('service')->name('service.')->group(function () {
    Route::get('/create', [ServiceController::class, 'create'])->name('create');
    Route::post('/', [ServiceController::class, 'store'])->name('store');
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('{service}/show', [ServiceController::class, 'show'])->name('show');
    Route::get('{service}/edit', [ServiceController::class, 'edit'])->name('edit');
    Route::put('{service}/update', [ServiceController::class, 'update'])->name('update');
    Route::delete('/{service}', [ServiceController::class, 'destroy'])->name('destroy');
});

Route::resource('articles', ArticleController::class);
/**
 * Группа стандартных CRUD-маршрутов с префиксом URL и именованием
 */
Route::prefix('products')->name('products.')->group(function () {
// GET /products -> products.index
    Route::get('/', [ProductController::class, 'index'])->name('index');
// GET /products/create -> products.create
    Route::get('/create', [ProductController::class, 'create'])->name('create');
// POST /products -> products.store
    Route::post('/', [ProductController::class, 'store'])->name('store');
// GET /products/{product} -> products.show
    Route::get('/{product}', [ProductController::class, 'show'])->name('show');
// GET /products/{product}/edit -> products.edit
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
// PUT/PATCH /products/{product} -> products.update
    Route::match(['put', 'patch'], '/{product}', [ProductController::class, 'update'])->name('update');
// DELETE /products/{product} -> products.destroy
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
});
