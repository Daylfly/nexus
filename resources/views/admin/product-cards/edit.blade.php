<x-layouts.admin :title="'Редактировать карточку'">
    <h1 class="mb-5 text-2xl font-bold">Редактирование карточки</h1>
    <form method="post" action="{{ route('admin.product-cards.update', $card) }}" enctype="multipart/form-data" class="rounded-xl bg-white p-5 shadow-sm">
        @csrf
        @method('put')
        @include('admin.product-cards._form', ['card' => $card])
    </form>
</x-layouts.admin>
