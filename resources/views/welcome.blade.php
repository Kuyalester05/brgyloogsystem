<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page</title>

    <!-- Fonts: Modern aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Fallback styling if Vite isn't running */
            body {
                background-color: #000;
                color: white;
            }
        </style>
    @endif
</head>
<body class="bg-[#000000] dark:bg-[#0a0a0a] text-white min-h-screen flex flex-col">

<header class="fixed top-0 left-0 w-full p-4 bg-transparent backdrop-blur-sm z-50">
    @if (Route::has('login'))
        <nav class="flex items-center gap-3">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="px-4 py-1.5 rounded-lg text-sm font-medium bg-[#1b1b18] text-white hover:bg-[#333] transition-all duration-200 shadow-sm">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="px-4 py-1.5 rounded-lg text-sm font-medium bg-[#1b1b18] text-white hover:bg-[#333] dark:bg-[#EDEDEC] dark:text-[#0a0a0a] dark:hover:bg-gray-300 transition-all duration-200 shadow-sm">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="px-4 py-1.5 rounded-lg text-sm font-medium bg-[#1b1b18] text-white hover:bg-[#333] dark:bg-[#EDEDEC] dark:text-[#0a0a0a] dark:hover:bg-gray-300 transition-all duration-200 shadow-sm">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>

<!-- Main Content -->
<main class="flex-1 flex flex-col items-center justify-center p-6 text-center">
    <h4 class="text-lg sm:text-2xl md:text-3xl font-semibold tracking-wide">
        Discover our Barangay by using
    </h4>
    <h1 class="font-bold tracking-tight" style="font-size: 100px;">
        UGNAYAN LOOG
    </h1>
</main>


</body>
</html>
