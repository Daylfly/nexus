<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $article->title }}</title>
</head>
<body class="min-h-screen bg-zinc-50 font-sans text-zinc-800 antialiased">

<header class="max-w-7xl mx-auto px-4 py-6">
    <div class="flex items-center justify-between">
        <a href="{{ route('articles.index') }}" class="text-zinc-500 hover:text-zinc-900 text-sm uppercase">← Назад к статьям</a>
    </div>
</header>

<main class="max-w-4xl mx-auto px-4 pb-12">


    <h1 class="text-4xl font-bold text-zinc-900 mb-4">{{ $article->title }}</h1>

    <div class="flex flex-wrap gap-2 mb-6">
        @foreach (explode(',', $article->tags) as $tag)
            <span class="px-3 py-1 text-black text-xs">
                {{ trim($tag) }}
            </span>
        @endforeach
    </div>
    @if ($article->banner_image)
        <img src="{{ Storage::url($article->banner_image) }}"
             class="w-full h-128 object-cover rounded-lg mb-8 shadow-sm">
    @endif

    <p class="text-black text-xl mb-8">{{ $article->short_description }}</p>

    <div class="prose prose-zinc text-lg max-w-none">
        {!! (($article->content)) !!}
    </div>

    <div class="mt-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            @foreach (['image_one', 'image_two', 'image_three', 'image_four'] as $col)
                @if ($article->{$col})
                    <div class="group overflow-hidden rounded-xl shadow-sm border border-zinc-100 bg-white">
                        <img
                            src="{{ Storage::url($article->{$col}) }}"
                            alt="{{ $article->title }}"
                            class="w-full h-48 object-cover"
                        >
                    </div>
                @endif
            @endforeach
        </div>
    </div>


</main>
</body>
</html>
