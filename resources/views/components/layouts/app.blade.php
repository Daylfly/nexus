<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'IronCore Fitness' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @if(config('ui.icon_set', 'fontawesome') === 'fontawesome')
        <script src="https://kit.fontawesome.com/80a2f7f61f.js" crossorigin="anonymous"></script>
    @endif
</head>
<body style="font-family: Inter, sans-serif;">
    {{ $slot }}
</body>
</html>
