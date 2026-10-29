<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Риелтор Марат — помощь в покупке и продаже недвижимости">
    <title>Realty_M — Риелтор Марат</title>
    
    <!-- Tailwind CSS и JS через Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased">
    
    <!-- Шапка сайта -->
    <x-header/>
    
    <!-- Основной контент -->
    <main>
        @yield('content')
        {{ $slot ?? '' }}
    </main>
    
    <!-- Подвал сайта -->
    <x-footer/>
    
</body>
</html>