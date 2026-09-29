@php($isEdit = isset($card))
<div class="grid gap-4 md:grid-cols-2">
    <div class="md:col-span-2">
        <label class="text-sm" for="title">Название</label>
        <input id="title" name="title" value="{{ old('title', $card->title ?? '') }}" class="mt-1 w-full rounded border px-3 py-2" required>
        @error('title') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div class="md:col-span-2">
        <label class="text-sm" for="description">Описание</label>
        <textarea id="description" name="description" rows="4" class="mt-1 w-full rounded border px-3 py-2" required>{{ old('description', $card->description ?? '') }}</textarea>
        @error('description') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="text-sm" for="price">Цена</label>
        <input id="price" type="number" step="0.01" min="0" name="price" value="{{ old('price', $card->price ?? '') }}" class="mt-1 w-full rounded border px-3 py-2" required>
        @error('price') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="text-sm" for="sort_order">Сортировка</label>
        <input id="sort_order" type="number" min="0" name="sort_order" value="{{ old('sort_order', $card->sort_order ?? 0) }}" class="mt-1 w-full rounded border px-3 py-2" required>
        @error('sort_order') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div class="md:col-span-2">
        <label class="text-sm" for="image">Изображение</label>
        <input id="image" type="file" name="image" accept="image/*" class="mt-1 w-full rounded border px-3 py-2" @if(!$isEdit) required @endif>
        @error('image') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
</div>
<button class="mt-5 rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600">Сохранить</button>
