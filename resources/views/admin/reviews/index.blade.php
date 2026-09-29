<x-layouts.admin :title="'Отзывы'">
    <div class="mb-5 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Отзывы</h1>
        <a href="{{ route('admin.reviews.create') }}" class="rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600">Добавить отзыв</a>
    </div>

    <div class="overflow-hidden rounded-xl bg-white shadow-sm">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-left">
                <tr>
                    <th class="px-4 py-3">Автор</th>
                    <th class="px-4 py-3">Оценка</th>
                    <th class="px-4 py-3">Сорт.</th>
                    <th class="px-4 py-3">Текст</th>
                    <th class="px-4 py-3">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                    <tr class="border-t">
                        <td class="px-4 py-3">
                            <p class="font-semibold">{{ $review->author }}</p>
                            <p class="text-xs text-slate-500">{{ $review->position }}</p>
                        </td>
                        <td class="px-4 py-3">{{ $review->rating }}/5</td>
                        <td class="px-4 py-3">{{ $review->sort_order }}</td>
                        <td class="max-w-md truncate px-4 py-3">{{ $review->text }}</td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.reviews.edit', $review) }}" class="rounded border px-3 py-1.5">Изменить</a>
                                <form method="post" action="{{ route('admin.reviews.destroy', $review) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="rounded border border-red-300 px-3 py-1.5 text-red-700">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $reviews->links() }}</div>
</x-layouts.admin>

