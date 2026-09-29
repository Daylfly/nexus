<x-layouts.admin :title="'Управление акциями'">
    <h1 class="mb-5 text-2xl font-bold">Редактирование секции "Акции"</h1>
    <div class="space-y-4">
        @foreach($promotions as $promotion)
            <form method="post" action="{{ route('admin.promotions.update', $promotion) }}" class="rounded-xl bg-white p-5 shadow-sm">
                @csrf
                @method('put')
                <div class="grid gap-4 md:grid-cols-2">
                    <div class="md:col-span-2">
                        <label class="text-sm">Заголовок</label>
                        <input name="title" value="{{ old('title', $promotion->title) }}" class="mt-1 w-full rounded border px-3 py-2" required>
                    </div>
                    <div class="md:col-span-2">
                        <label class="text-sm">Описание</label>
                        <textarea name="description" rows="3" class="mt-1 w-full rounded border px-3 py-2" required>{{ old('description', $promotion->description) }}</textarea>
                    </div>
                    <div>
                        <label class="text-sm">Сортировка</label>
                        <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $promotion->sort_order) }}" class="mt-1 w-full rounded border px-3 py-2" required>
                    </div>
                </div>
                <button class="mt-4 rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600">Сохранить акцию</button>
            </form>
        @endforeach
    </div>
</x-layouts.admin>
