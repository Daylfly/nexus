<x-layout :title="$product->title">
    <a href="{{ route('products.index') }}" class="text-sm text-zinc-500 hover:text-zinc-900">← Назад в каталог</a>

    @if(session('success'))
        <div class="mt-4 rounded bg-emerald-50 p-3 text-sm text-emerald-700">{{ session('success') }}</div>
    @endif

    @php
        $image = $product->image_path
            ? (str_starts_with($product->image_path, 'http') ? $product->image_path : asset('storage/'.$product->image_path))
            : 'https://placehold.co/800x500?text=Product';
    @endphp

    <div class="mt-6 grid gap-8 md:grid-cols-2">
        <img src="{{ $image }}" alt="{{ $product->title }}" class="w-full rounded-xl object-cover bg-zinc-100">
        <div>
            <p class="text-[11px] uppercase tracking-wider text-zinc-400">{{ $product->category->name ?? 'Без категории' }}</p>
            <h1 class="mt-2 text-3xl font-semibold text-zinc-900">{{ $product->title }}</h1>
            <p class="mt-4 whitespace-pre-line text-zinc-600">{{ $product->description }}</p>
            <h3 class="mt-6 text-2xl font-medium">{{ number_format((float) $product->price, 2, '.', ' ') }} ₽</h3>
            <div class="mt-8 flex items-center gap-4">
                <a href="{{ route('products.edit', $product) }}"
                   class="rounded bg-zinc-900 px-4 py-2 text-sm text-white hover:bg-zinc-800">Редактировать</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Удалить товар?')"
                            class="text-sm text-red-600 hover:underline">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
