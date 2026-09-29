<x-layouts.admin :title="'Карточки'">
    <div class="mb-5 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Карточки программ</h1>
        <a href="{{ route('admin.product-cards.create') }}" class="rounded bg-orange-500 px-4 py-2 text-white hover:bg-orange-600">Добавить</a>
    </div>

    <div class="overflow-hidden rounded-xl bg-white shadow-sm">
        <table class="min-w-full text-sm">
            <thead class="bg-slate-50 text-left">
                <tr>
                    <th class="px-4 py-3">Название</th>
                    <th class="px-4 py-3">Цена</th>
                    <th class="px-4 py-3">Сорт.</th>
                    <th class="px-4 py-3">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cards as $card)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $card->title }}</td>
                        <td class="px-4 py-3">{{ number_format((float) $card->price, 0, ',', ' ') }} ₽</td>
                        <td class="px-4 py-3">{{ $card->sort_order }}</td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.product-cards.edit', $card) }}" class="rounded border px-3 py-1.5">Изменить</a>
                                <form method="post" action="{{ route('admin.product-cards.destroy', $card) }}">
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

    <div class="mt-4">{{ $cards->links() }}</div>
</x-layouts.admin>
