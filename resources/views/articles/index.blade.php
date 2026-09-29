<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Статьи</title>
</head>
<body class="min-h-screen bg-zinc-50 font-sans text-zinc-800 antialiased">

<header class="max-w-7xl mx-auto px-4 py-6">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-[11px] uppercase tracking-[0.2em] text-zinc-400">Articles</p>
            <h1 class="text-2xl font-medium">Список статей</h1>
        </div>
        <a href="{{ route('articles.create') }}"
           class="bg-zinc-900 text-xs uppercase tracking-[0.2em] px-4 py-2 text-white focus:bg-cyan-600 hover:bg-zinc-800">
            + Добавить статью
        </a>
    </div>
</header>

@session('success')
<div class="max-w-7xl mx-auto px-4 mb-4 bg-cyan-50 text-sm text-cyan-700 p-3 rounded">
    {{ $value }}
</div>
@endsession

<main class="max-w-7xl mx-auto px-4 pb-12">
    @forelse ($articles as $article)
        <article class="group flex flex-col md:flex-row border border-zinc-200 rounded-lg overflow-hidden bg-white mb-6 shadow-sm hover:shadow-md">
            @if ($article->banner_image)
                <img
                    src="{{ Storage::url($article->banner_image) }}"
                    alt="{{ $article->title }}"
                    class="h-80 w-full md:w-1/3 object-cover cursor-pointer"
                >
            @endif

            <div class="p-6 flex-1">
                <h2 class="text-xl font-semibold text-zinc-900 mb-2 group-hover:text-cyan-600 transition-colors">
                    {{ $article->title }}
                </h2>
                <p class="text-sm text-zinc-500 mb-3 line-clamp-2">
                    {{ $article->short_description }}
                </p>

                @if ($article->tags)
                    <p class="text-[11px] text-zinc-500 uppercase tracking-wider mb-4">
                        {{ $article->tags }}
                    </p>
                @endif

                <!-- 4 картинки -->
                <div class="grid grid-cols-4 gap-2 mb-4">
                    @if ($article->image_one)
                        <img src="{{ Storage::url($article->image_one) }}" class="w-full h-24 object-cover rounded" alt="">
                    @endif
                    @if ($article->image_two)
                        <img src="{{ Storage::url($article->image_two) }}" class="w-full h-24 object-cover rounded" alt="">
                    @endif
                    @if ($article->image_three)
                        <img src="{{ Storage::url($article->image_three) }}" class="w-full h-24 object-cover rounded" alt="">
                    @endif
                    @if ($article->image_four)
                        <img src="{{ Storage::url($article->image_four) }}" class="w-full h-24 object-cover rounded" alt="">
                    @endif
                </div>

                <div class="flex gap-4 text-sm">
                    <a href="{{ route('articles.show', $article) }}" class="text-zinc-600 hover:text-cyan-600">Открыть</a>
                    <a href="{{ route('articles.edit', $article) }}" class="text-zinc-600 hover:text-cyan-600">Редактировать</a>
                    <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Удалить статью?')">Удалить</button>
                    </form>
                </div>
            </div>
        </article>
    @empty
        <p class="text-zinc-500 text-center py-12">
            Пока нет ни одной статьи
        </p>
    @endforelse

    {{ $articles->links() }}
</main>
</body>
</html>
