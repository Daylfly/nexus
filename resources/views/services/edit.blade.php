<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактировать услугу</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"></head>
<body class="bg-gray-50 text-gray-800 font-sans min-h-screen flex items-center justify-center p-4">

<div class="w-full max-w-md bg-white rounded-xl shadow-sm border border-gray-200 p-6 space-y-6">
    <h1 class="text-2xl font-bold text-gray-900 mb-1">Редактировать услугу</h1>

    <form action="{{ route('service.update', $service) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Название</label>
            <input type="text" name="title" id="title" value="{{ old('title', $service->title) }}"
                   class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-shadow shadow-sm"
                   required>
        </div>
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Цена (₽)</label>
            <input type="number" name="price" id="price" value="{{ old('price', $service->price) }}"
                   class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-shadow shadow-sm"
                   step="0.01" min="0" required>
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Описание</label>
            <textarea name="description" id="description" rows="4"
                      class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-shadow shadow-sm resize-y"
                      required>{{ old('description', $service->description) }}</textarea>
        </div>

        <!-- Кнопка -->
        <button type="submit"
                class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors shadow-md">
            Сохранить изменения
        </button>
    </form>
</div>
</body>
</html>
