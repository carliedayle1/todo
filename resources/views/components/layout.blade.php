<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen text-gray-800 bg-gray-100 dark:bg-gray-900 dark:text-gray-200">
    <!-- Header -->
    <x-navbar />

    <!-- Main Content -->
    <main class="container flex-grow px-6 py-8 mx-auto">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>