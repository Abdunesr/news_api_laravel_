<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <style>
            .bg-auth {
                background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            }
            .card-glass {
                background: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            }
            .btn-primary {
                background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px -5px rgba(59, 130, 246, 0.4);
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 bg-auth">
        <div class="min-h-screen flex flex-col items-center relative">
            <!-- Logo positioned at top right -->
            <div class="absolute top-6 left-6 animate__animated animate__fadeIn">
                <a href="/" class="block">
                    <x-application-logo class="w-24 h-24 fill-current text-blue-600 hover:text-blue-700 transition-colors" />
                </a>
            </div>

            <!-- Main content -->
            <div class="w-full flex-1 flex flex-col sm:justify-center items-center p-6">
                <div class="w-full sm:max-w-md card-glass rounded-2xl overflow-hidden animate__animated animate__fadeInUp">
                    <div class="px-10 py-12">
                        {{ $slot }}
                    </div>
                </div>
            </div>

            <!-- Decorative elements -->
            <div class="absolute bottom-0 left-0 w-full overflow-hidden">
                <svg class="animate__animated animate__fadeIn" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="fill-blue-100"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="fill-blue-100"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="fill-blue-50"></path>
                </svg>
            </div>
        </div>

        <script>
            // Add animation class when page loads
            document.addEventListener('DOMContentLoaded', function() {
                const logo = document.querySelector('.animate__fadeIn');
                const card = document.querySelector('.animate__fadeInUp');
                
                setTimeout(() => {
                    logo.classList.add('animate__fadeIn');
                    card.classList.add('animate__fadeInUp');
                }, 100);
            });
        </script>
    </body>
</html>