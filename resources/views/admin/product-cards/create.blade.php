<x-layouts.admin :title="'Добавить карточку'">
    <h1 class="mb-5 text-2xl font-bold">Новая карточка</h1>
    <form method="post" action="{{ route('admin.product-cards.store') }}" enctype="multipart/form-data" class="rounded-xl bg-white p-5 shadow-sm">
        @csrf
        @include('admin.product-cards._form')
    </form>
</x-layouts.admin>
