<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Подробнее</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-8 min-h-screen">

<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-gray-900 tracking-tight">
        {{ $service->title }}
    </h1>
    <div class="w-fit bg-white border-2 border-gray-400 p-4 rounded-lg">
        <p class="text-base text-gray-700 leading-relaxed font-normal">
            {{ $service->description }}
        </p>
    </div>
</div>

</body>
</html>
