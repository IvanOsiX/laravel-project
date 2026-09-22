<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсовой проект</title>
    <!-- Подключение Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-900">Мой Сайт</h1>
            <nav class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">Главная</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900">О нас</a>
                <a href="{{ route('contacts') }}" class="text-gray-600 hover:text-gray-900">Контакты</a>
            </nav>
        </div>
    </header>

    <!-- Основная часть -->
    <main class="flex-grow max-w-7xl mx-auto px-4 py-8 w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow mt-auto">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center text-gray-500">
            <p>ФИО: Гайдаржи Иван Николаевич | Группа: 243-321</p>
        </div>
    </footer>

</body>
</html>