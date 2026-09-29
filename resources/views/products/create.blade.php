<x-layout title="Добавить товар">
    <h1 class="mb-6 text-2xl font-medium">Новый товар</h1>

    @if ($errors->any())
        <div class="mb-4 rounded bg-red-50 p-3 text-sm text-red-700">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="max-w-xl space-y-4">
        @csrf
        <div>
            <label class="mb-1 block text-sm">Название товара</label>
            <input type="text" name="title" value="{{ old('title') }}" required
                   class="w-full rounded border border-zinc-300 px-3 py-2">
        </div>
        <div>
            <label class="mb-1 block text-sm">Категория</label>
            <select name="category_id" class="w-full rounded border border-zinc-300 px-3 py-2">
                <option value="">Без категории</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ (string) old('category_id') === (string) $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="mb-1 block text-sm">Описание</label>
            <textarea name="description" rows="5" required
                      class="w-full rounded border border-zinc-300 px-3 py-2">{{ old('description') }}</textarea>
        </div>
        <div>
            <label class="mb-1 block text-sm">Цена (руб)</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}" required
                   class="w-full rounded border border-zinc-300 px-3 py-2">
        </div>
        <div>
            <label class="mb-1 block text-sm">Фото</label>
            <input type="file" name="image" accept="image/*" required class="w-full text-sm">
        </div>
        <button type="submit" class="rounded bg-zinc-900 px-4 py-2 text-white hover:bg-zinc-800">Сохранить</button>
    </form>
</x-layout>
