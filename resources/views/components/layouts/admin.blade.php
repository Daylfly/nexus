<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Админка IronCore' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="min-h-screen">
        <header class="border-b bg-white">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
                <div class="font-bold">Админ-панель IronCore</div>
                <nav class="flex items-center gap-4 text-sm">
                    <a href="{{ route('admin.product-cards.index') }}" class="hover:text-orange-600">Карточки</a>
                    <a href="{{ route('admin.promotions.index') }}" class="hover:text-orange-600">Акции</a>
                    <a href="{{ route('admin.reviews.index') }}" class="hover:text-orange-600">Отзывы</a>
                    <a href="{{ route('admin.messages.index') }}" class="hover:text-orange-600">Сообщения</a>
                </nav>
            </div>
        </header>
        <main class="mx-auto max-w-7xl px-4 py-6">
            @if(session('status'))
                <div class="mb-4 rounded-md bg-emerald-50 p-3 text-emerald-700">{{ session('status') }}</div>
            @endif
            {{ $slot }}
        </main>
    </div>
</body>
</html>
