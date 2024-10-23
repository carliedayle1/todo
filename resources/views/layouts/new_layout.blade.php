<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800 text-white">
        @include('partials.navbar')
    </header>

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        @include('partials.footer')
    </footer>
</body>
</html>
