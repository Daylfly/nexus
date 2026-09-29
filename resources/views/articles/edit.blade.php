<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Редактировать статью</title>
</head>
<body class="min-h-screen bg-zinc-50 font-sans text-zinc-800 antialiased">

<header class="max-w-7xl mx-auto px-4 py-6">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-[11px] uppercase tracking-[0.2em] text-zinc-400">Articles</p>
            <h1 class="text-2xl font-medium">Редактировать статью</h1>
        </div>
    </div>
</header>

<main class="max-w-7xl mx-auto px-4 pb-12">
    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm font-medium text-zinc-700">Название</label>
            <input type="text" name="title" value="{{ old('title', $article->title) }}"
                   class="w-full mt-1 border border-zinc-300 rounded-md px-3 py-2 text-sm focus:border-cyan-500 focus:ring-cyan-500"
                   required maxlength="255">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-zinc-700">Краткое описание</label>
            <input type="text" name="short_description" value="{{ old('short_description', $article->short_description) }}"
                   class="w-full mt-1 border border-zinc-300 rounded-md px-3 py-2 text-sm focus:border-cyan-500 focus:ring-cyan-500"
                   required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-zinc-700">Контент</label>
            <textarea name="content" rows="6"
                      class="w-full mt-1 border border-zinc-300 rounded-md px-3 py-2 text-sm focus:border-cyan-500 focus:ring-cyan-500"
                      required>{{ old('content', $article->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-zinc-700">Баннер</label>
            @if ($article->banner_image)
                <img src="{{ Storage::url($article->banner_image) }}" class="w-full max-w-md h-32 object-cover mb-2 rounded border border-zinc-200">
            @endif
            <input type="file" name="banner_image" accept="image/*"
                   class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-zinc-700">4 картинки</label>
            <div class="grid grid-cols-4 gap-2 mb-2">
                @foreach (['image_one', 'image_two', 'image_three', 'image_four'] as $col)
                    @if ($article->{$col})
                        <img src="{{ Storage::url($article->{$col}) }}" class="w-full h-24 object-cover rounded border border-zinc-200">
                    @endif
                @endforeach
            </div>
            <input type="file" name="images[]" multiple accept="image/*"
                   class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-zinc-700">Теги</label>
            <input type="text" name="tags" value="{{ old('tags', $article->tags) }}"
                   class="w-full mt-1 border border-zinc-300 rounded-md px-3 py-2 text-sm focus:border-cyan-500 focus:ring-cyan-500"
                   placeholder="laravel, php, кошка">
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-zinc-900 text-white px-4 py-2 rounded text-sm uppercase tracking-[0.2em]">Сохранить изменения</button>
            <a href="{{ route('articles.index') }}" class="text-zinc-600 hover:text-zinc-900">Отмена</a>
        </div>
    </form>
</main>
</body>
</html>
