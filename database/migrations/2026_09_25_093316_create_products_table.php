<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    /**
     * Создание таблицы товаров со внешним ключом.
     */
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
// Связь с категорией (nullOnDelete при удалении категории)
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title'); // Название товара
            $table->text('description'); // Описание
            $table->decimal('price', 10, 2); // Цена
            $table->string('image_path'); // Относительный путь к картинке
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('products');
    }
};
