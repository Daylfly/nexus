<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Создание услуги</title>
</head>
<body class="min-h-screen bg-zinc-50 font-sans text-zinc-800 antialiased">
    <div class="flex min-h-screen items-center justify-center px-4">
        <form
            class="w-full max-w-md space-y-5 border border-zinc-200 bg-white p-8"
            action="{{ route('service.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf

            <div class="space-y-1">
                <p class="text-[11px] font-medium uppercase tracking-[0.2em]">Service</p>
                <h1 class="text-xl font-medium tracking-tight">Новая услуга</h1>
            </div>

            @if(session('success'))
                <p class="border-l-2 border-cyan-500 pl-3 text-sm text-zinc-600">{{ session('success') }}</p>
            @endif

            <label class="block space-y-1.5">
                <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Название</span>
                <input
                    name="title"
                    type="text"
                    value="{{ old('title') }}"
                    placeholder="Название услуги"
                    class="w-full border-0 border-b border-zinc-200 bg-transparent px-0 py-2 text-sm outline-none placeholder:text-zinc-300 focus:border-cyan-500"
                >
                @error('title')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </label>

            <label class="block space-y-1.5">
                <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Описание</span>
                <textarea
                    rows="1"
                    name="description"
                    placeholder="Краткое описание"
                    class="field-sizing-content w-full overflow-hidden resize-none border-0 border-b border-zinc-200 bg-transparent px-0 py-2 text-sm outline-none placeholder:text-zinc-300 focus:border-cyan-500"
                    oninput="this.style.height='auto';this.style.height=this.scrollHeight+'px'"
                >{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </label>

            <label class="block space-y-1.5">
                <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Цена</span>
                <input
                    type="number"
                    name="price"
                    value="{{ old('price') }}"
                    placeholder="0"
                    class="w-full border-0 border-b border-zinc-200 bg-transparent px-0 py-2 text-sm outline-none placeholder:text-zinc-300 focus:border-cyan-500"
                >
                @error('price')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </label>

            <label class="block space-y-1.5">
                <span class="text-[11px] uppercase tracking-[0.16em] text-zinc-400">Изображение</span>
                <input
                    type="file"
                    name="image_path"
                    class="w-full text-sm text-zinc-500 file:mr-3 file:border-0 file:bg-zinc-100 file:px-3 file:py-1.5 file:text-xs file:uppercase file:tracking-wider file:text-zinc-700"
                >
                @error('image_path')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </label>

            <button
                type="submit"
                class="w-full bg-zinc-900 py-2.5 text-xs font-medium uppercase tracking-[0.2em] text-white transition-colors focus:bg-cyan-600"
            >
                Сохранить
            </button>
        </form>
    </div>

    <script>

    </script>
</body>
</html>
