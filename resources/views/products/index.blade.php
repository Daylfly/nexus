<x-layout title="Каталог товаров">
    <div class="mb-8 flex items-center justify-between gap-4">
        <div>
            <p class="text-[11px] uppercase tracking-[0.2em] text-zinc-400">Products</p>
            <h1 class="text-2xl font-medium">Каталог товаров</h1>
        </div>
        <a href="{{ route('products.create') }}"
           class="bg-zinc-900 text-xs uppercase tracking-[0.2em] px-4 py-2 text-white hover:bg-zinc-800">
            + Добавить товар
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded bg-emerald-50 p-3 text-sm text-emerald-700">{{ session('success') }}</div>
    @endif

    <form method="GET" action="{{ route('products.index') }}" class="mb-6">
        <select name="category_id" onchange="this.form.submit()"
                class="rounded border border-zinc-300 bg-white px-3 py-2 text-sm">
            <option value="">Все категории</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ (string) request('category_id') === (string) $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @forelse($products as $product)
            <x-product-card :product="$product" />
        @empty
            <p class="col-span-full py-12 text-center text-zinc-500">Пока нет ни одного товара</p>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $products->links() }}
    </div>
</x-layout>
