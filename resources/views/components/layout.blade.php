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

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex flex-col">
    <!-- Header -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-8">
        {{ $slot }}
    </main>

    <x-footer />
    <script>
    // Check if the user has a theme preference saved in localStorage
    const userThemePreference = localStorage.getItem('theme');
    const systemThemePreference = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Check theme on page load
    if (userThemePreference === 'dark' || (!userThemePreference && systemThemePreference)) {
        document.documentElement.classList.add('dark');
        toggleButtons('dark');
    } else {
        document.documentElement.classList.remove('dark');
        toggleButtons('light');
    }

    // Function to toggle theme
    function toggleTheme(theme) {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
        toggleButtons(theme);
    }

    // Function to toggle the visibility of buttons
    function toggleButtons(theme) {
        const darkModeButton = document.querySelector('button[data-hs-theme-click-value="dark"]');
        const lightModeButton = document.querySelector('button[data-hs-theme-click-value="light"]');
        
        if (theme === 'dark') {
            darkModeButton.classList.add('hidden');
            lightModeButton.classList.remove('hidden');
        } else {
            darkModeButton.classList.remove('hidden');
            lightModeButton.classList.add('hidden');
        }
    }

    // Attach click event listeners to the theme toggle buttons
    document.querySelector('button[data-hs-theme-click-value="dark"]').addEventListener('click', function () {
        toggleTheme('dark');
    });
    document.querySelector('button[data-hs-theme-click-value="light"]').addEventListener('click', function () {
        toggleTheme('light');
    });
</script>
</body>

</html>