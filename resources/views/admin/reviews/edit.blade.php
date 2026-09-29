<x-layouts.admin :title="'Редактировать отзыв'">
    <h1 class="mb-5 text-2xl font-bold">Редактирование отзыва</h1>
    <form method="post" action="{{ route('admin.reviews.update', $review) }}" class="rounded-xl bg-white p-5 shadow-sm">
        @csrf
        @method('put')
        @include('admin.reviews._form', ['review' => $review])
    </form>
</x-layouts.admin>

