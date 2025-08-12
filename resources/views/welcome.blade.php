<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-6">Welcome to Laravel</h1>

            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                           Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                           Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                               Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>
</html>
