<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список услуг</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-2xl font-bold mb-8 text-gray-900 text-center tracking-wider m-14">Список услуг</h1>
    @if(session('success'))
        <div class="">
            <h5>{{ session('success') }}</h5>
        </div>
    @endif
    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center">
        @foreach($services as $service)
            <li class="w-full max-w-[280px] h-[420px] bg-white border border-gray-200 p-6 flex flex-col justify-between hover:shadow-lg transition-shadow duration-300">
                <div>
                    <span class="text-[10px] tracking-widest text-gray-800 uppercase font-semibold block mb-1">Услуга</span>
                    <h3 class="text-base font-medium text-gray-900 truncate" title="{{ $service->title }}">
                        {{ $service->title }}
                    </h3>
                </div>
                <div class="w-full h-40 bg-gray-50 my-3 overflow-hidden border border-gray-100 flex items-center justify-center">
                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $service->image_path) }}" alt="{{ $service->title }}">
                </div>
                <div>
                    <span class="text-[10px] tracking-widest text-gray-400 uppercase block">Цена</span>
                    <span class="text-base font-medium text-gray-800">
                            {{ number_format($service->price, 0, '.', ' ') }} ₽
                        </span>
                </div>

                <a href="{{ route('service.show', ['service' => $service->id]) }}"
                   class="w-full bg-[#1e1f21] hover:bg-black text-white text-[11px] tracking-widest uppercase py-3 text-center transition-colors block font-medium mt-3">Подробнее</a>
                <form action="{{ route('delete', ['service' => $service->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>

                <a href="{{ route('service.edit', ['service' => $service->id]) }}"
                                       class="w-full bg-[#1e1f21] hover:bg-black text-white text-[11px] tracking-widest uppercase py-3 text-center transition-colors block font-medium mt-3">Редактировать</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
