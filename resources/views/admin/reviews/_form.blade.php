<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-sm" for="author">Автор</label>
        <input id="author" name="author" value="{{ old('author', $review->author ?? '') }}" class="mt-1 w-full rounded border px-3 py-2" required>
        @error('author') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="text-sm" for="position">Должность</label>
        <input id="position" name="position" value="{{ old('position', $review->position ?? '') }}" class="mt-1 w-full rounded border px-3 py-2">
        @error('position') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="text-sm" for="rating">Оценка (1-5)</label>
        <input id="rating" type="number" min="1" max="5" name="rating" value="{{ old('rating', $review->rating ?? 5) }}" class="mt-1 w-full rounded border px-3 py-2" required>
        @error('rating') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="text-sm" for="sort_order">Сортировка</label>
        <input id="sort_order" type="number" min="0" name="sort_order" value="{{ old('sort_order', $review->sort_order ?? 0) }}" class="mt-1 w-full rounded border px-3 py-2" required>
        @error('sort_order') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
    <div class="md:col-span-2">
        <label class="text-sm" for="text">Текст отзыва</label>
        <textarea id="text" name="text" rows="5" class="mt-1 w-full rounded border px-3 py-2" required>{{ old('text', $review->text ?? '') }}</textarea>
        @error('text') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
    </div>
</div>
<button class="mt-5 rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600">Сохранить</button>

