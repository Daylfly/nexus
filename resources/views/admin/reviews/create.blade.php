<x-layouts.admin :title="'Добавить отзыв'">
    <h1 class="mb-5 text-2xl font-bold">Новый отзыв</h1>
    <form method="post" action="{{ route('admin.reviews.store') }}" class="rounded-xl bg-white p-5 shadow-sm">
        @csrf
        @include('admin.reviews._form')
    </form>
</x-layouts.admin>

