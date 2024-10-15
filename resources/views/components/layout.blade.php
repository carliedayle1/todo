<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-3gW7w9dE3JGH4F0dh/R9A5+3Rt8ERcZacGNHlD+/3THvN4l/c5ZGHF4qgOhAehIn" crossorigin="anonymous">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex flex-col">
    <!-- Header -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-8">
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-J6qa4849BlE+YO9i3J6C8Gm3XQ8lRm8a5J9T+NIN2XZp0gP4VWX5eyZR46xdG33p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-Ogvrx1sX1ZV7I4dq1JzXeI+Vq7D5HByi+3ZMXZgRgFbC4Uo09C5T7VEE5F3WOPW7" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha384-s7CP5V2ZZXJ23ckD4X4u3kZclFaHxOhwKx2h1fQQ72M/+s5n7+y1J5p45P6fp81t" crossorigin="anonymous"></script>
</body>

</html>
