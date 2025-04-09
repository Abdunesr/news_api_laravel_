<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col lg:flex-row justify-between items-center gap-4">
            {{-- Logo and Categories --}}
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-yellow-600">EwnetNews</a>
                <nav class="space-x-3 hidden md:flex">
                    @foreach(['sports', 'politics', 'entertainment', 'technology', 'science'] as $category)
                        <a href="{{ route('dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-yellow-500 capitalize">
                            {{ $category }}
                        </a>
                    @endforeach
                </nav>
            </div>

            {{-- Auth Links --}}
            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 hover:text-yellow-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-yellow-500">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:text-yellow-500">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-8 px-4">
        @yield('content')
    </main>
</body>
</html>
