<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Realty_M — {{ $title ?? 'Авторизация' }}</title>

    <!-- Шрифт -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind + JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">

    <!-- Фон с лёгким градиентом -->
    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12"
         style="background: linear-gradient(135deg, #f0f4ff 0%, #e0e7ff 50%, #f0f4ff 100%);">

        <!-- Логотип текстом -->
        <a href="/" class="mb-8 text-center group">
            <span class="text-3xl font-bold bg-gradient-to-r from-[#3B7EFF] to-[#0D2E99] bg-clip-text text-transparent group-hover:opacity-80 transition-opacity">
                Realty_M
            </span>
        </a>

        <!-- Карточка с формой -->
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8 sm:p-10">
            {{ $slot }}
        </div>

        <!-- Ссылка на главную внизу -->
        <a href="/" class="mt-6 text-sm text-gray-500 hover:text-[#3B7EFF] transition-colors">
            ← Вернуться на главную
        </a>
    </div>

</body>
</html>