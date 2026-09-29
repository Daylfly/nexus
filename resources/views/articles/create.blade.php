<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Новая статья</title>
</head>
<body class="min-h-screen bg-zinc-50 font-sans text-zinc-800 antialiased">
<div class="flex min-h-screen items-center justify-center px-4">
    <form
        class="w-full max-w-md space-y-5 border border-zinc-200 bg-white p-8"
        action="{{ route('articles.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="space-y-1">
            <p class="text-[12px] font-medium uppercase tracking-[0.2em] text-zinc-400">Article</p>
            <h1 class="text-xl font-medium cursor-pointer">Новая статья</h1>
        </div>

        @if ($errors->any())
            <div class="border-l-2 border-red-500 pl-3 text-sm text-zinc-600 space-y-1">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <label class="block space-y-1.5">
            <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Название</span>
            <input
                name="title"
                type="text"
                value="{{ old('title') }}"
                placeholder="Заголовок"
                class="w-full border-0 border-b border-zinc-200 bg-transparent px-0 py-2 text-sm outline-none placeholder:text-zinc-300 focus:border-cyan-500"
            >
            @error('title')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
        </label>

        <label class="block space-y-1.5">
            <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Краткое описание</span>
            <textarea
                rows="2"
                name="short_description"
                placeholder="Превью"
                class="field-sizing-content w-full overflow-hidden resize-none border-0 border-b border-zinc-200 bg-transparent px-0 py-2 text-sm outline-none placeholder:text-zinc-300 focus:border-cyan-500"
                oninput="this.style.height='auto';this.style.height=this.scrollHeight+'px'"
            >{{ old('short_description') }}</textarea>
            @error('short_description')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
        </label>

        <label class="block space-y-1.5">
            <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Контент</span>
            <textarea
                rows="4"
                name="content"
                placeholder="Текст статьи"
                class="field-sizing-content w-full overflow-hidden resize-none border-0 border-b border-zinc-200 bg-transparent px-0 py-2 text-sm outline-none placeholder:text-zinc-300 focus:border-cyan-500"
                oninput="this.style.height='auto';this.style.height=this.scrollHeight+'px'"
            >{{ old('content') }}</textarea>
            @error('content')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
        </label>

        <label class="block space-y-1.5">
            <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Баннер</span>
            <input
                type="file"
                name="banner_image"
                accept="image/*"
                class="w-full text-sm text-zinc-500 file:mr-3 file:border-0 file:bg-zinc-100 file:px-3 file:py-1.5 file:text-xs file:uppercase file:tracking-wider file:text-zinc-700"
            >
            @error('banner_image')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
        </label>

        <label class="block space-y-1.5">
            <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">4 картинки</span>
            <input
                type="file"
                name="images[]"
                multiple
                accept="image/*"
                class="w-full text-sm text-zinc-500 file:mr-3 file:border-0 file:bg-zinc-100 file:px-3 file:py-1.5 file:text-xs file:uppercase file:tracking-wider file:text-zinc-700"
            >
            @error('images')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
            @error('images.*')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
        </label>

        <label class="block space-y-1.5">
            <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Теги</span>
            <input
                type="text"
                name="tags"
                value="{{ old('tags') }}"
                placeholder="laravel, php"
                class="w-full border-0 border-b border-zinc-200 bg-transparent px-0 py-2 text-sm outline-none placeholder:text-zinc-300 focus:border-cyan-500"
            >
            @error('tags')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
        </label>

        <button
            type="submit"
            class="w-full bg-zinc-900 py-2.5 text-xs font-medium uppercase tracking-[0.2em] text-white transition-colors focus:bg-cyan-600 hover:bg-zinc-800"
        >
            Сохранить
        </button>
    </form>

    @if ($errors->any())
        <div class="border-l-4 border-red-500 bg-red-50 text-red-700 p-4 rounded mb-6">
            <h3 class="font-semibold text-red-900">Не удалось создать статью:</h3>
            <ul class="mt-2 space-y-1 list-disc pl-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
