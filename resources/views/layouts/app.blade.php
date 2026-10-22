<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Realty_M')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    
    <x-header/>
    
    <main class="flex-grow">
        @yield('content') 
    </main>
    
    <x-footer/>
    
</body>
</html>