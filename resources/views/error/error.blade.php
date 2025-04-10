<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found ⚠️ | 404</title>
    @vite(['resources/css/app.css'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-100 to-amber-200 min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden md:max-w-2xl transition-all hover:shadow-2xl">
            <div class="p-8">
                <div class="flex flex-col items-center">
                    <!-- Honeycomb & Bee Animation -->
                    <div class="relative mb-8">
                        <div class="absolute -inset-4">
                            <div class="w-full h-full animate-spin-slow">
                                <svg viewBox="0 0 120 104" class="w-full h-full opacity-20">
                                    <path d="M60,0 L120,30 L120,80 L60,110 L0,80 L0,30 Z" fill="currentColor" class="text-amber-500"></path>
                                </svg>
                            </div>
                        </div>
                        <svg class="w-24 h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 7h.01" class="animate-pulse"></path>
                            <path d="M3.2 6.8c1.6-1.6 9.4-3.4 14.7-.8 3.4 1.7 4.7 4.7 4.1 7-.6 2.3-3 4-6.4 4.9-7.2 1.9-13.6-.7-15.3-6.1-.9-2.8-.2-5.4 1.3-7.3 1.5-1.9 4-3 6.9-2.5" class="text-amber-600 fill-amber-200"></path>
                            <path d="M8 7c0 1.1.9 2 2 2s2-.9 2-2" class="text-amber-800"></path>
                            <path d="M12 13c0 1.1.9 2 2 2s2-.9 2-2" class="text-amber-800"></path>
                        </svg>
                    </div>
                    
                    <h1 class="text-6xl font-bold text-amber-600 mb-4">404</h1>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Buzz! Lost in the Hive</h2>
                    <p class="text-gray-600 mb-8 text-center">
                        The honeycomb you're looking for doesn't exist in our hive.
                        Don't worry, our worker bees will help you find your way back!
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 w-full">
                        <a href="{{ url('/') }}" 
                           class="flex-1 px-6 py-3 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-medium rounded-lg transition-all duration-300 hover:shadow-lg text-center">
                            🏠 Return to Hive
                        </a>
                        <button onclick="window.history.back()" 
                           class="flex-1 px-6 py-3 border-2 border-amber-500 text-amber-600 hover:bg-amber-50 font-medium rounded-lg transition duration-300 text-center">
                            ↩ Go Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>