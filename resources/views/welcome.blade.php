<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsHub - Stay Informed</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.8) 0%, rgba(29, 78, 216, 0.9) 100%);
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .category-chip:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Animated Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50 animate__animated animate__fadeInDown">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2">
                <span class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">NewsHub</span>
            </a>
            <nav class="hidden md:flex space-x-8">
                <a href="#features" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Features</a>
                <a href="#categories" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Categories</a>
                <a href="#trending" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Trending</a>
            </nav>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="/dashboard" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">Register</a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient text-white">
        <div class="max-w-7xl mx-auto px-6 py-24 md:py-32 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0 animate__animated animate__fadeInLeft">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">Stay Informed With <span class="underline decoration-blue-300">The Latest News</span></h1>
                <p class="text-xl mb-8 text-blue-100 max-w-lg">Get real-time updates on global events, business, technology, and more. Curated by experts, delivered to you.</p>
                <div class="flex space-x-4">
                    <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-blue-600 font-bold rounded-lg hover:bg-gray-100 transition-colors shadow-lg">Get Started</a>
                    <a href="#features" class="px-8 py-3 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-blue-600 transition-colors">Learn More</a>
                </div>
            </div>
            <div class="md:w-1/2 animate__animated animate__fadeInRight">
                <img src="https://th.bing.com/th/id/OIP.YId7-OdpWesx1pt8EOi_igHaFs?w=1200&h=924&rs=1&pid=ImgDetMain" 
                     alt="World News" 
                     class="rounded-xl shadow-2xl border-4 border-white transform rotate-2 hover:rotate-0 transition-transform duration-300">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-4">Why Choose NewsHub?</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-16">We provide the best news experience with cutting-edge features</p>
            
            <div class="grid md:grid-cols-3 gap-12">
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Lightning Fast Updates</h3>
                    <p class="text-gray-600">Get news updates in real-time as events unfold around the world.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Personalized Feed</h3>
                    <p class="text-gray-600">Customize your news feed based on your interests and reading habits.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Secure Platform</h3>
                    <p class="text-gray-600">Your data privacy is our top priority with end-to-end encryption.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-4">Explore Categories</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-16">Dive into news that matters to you</p>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6">
                @foreach(['Politics', 'Technology', 'Business', 'Sports', 'Entertainment', 'Science', 'Health', 'World', 'Finance', 'Travel'] as $category)
                    <a href="{{ url('/?category=' . strtolower($category)) }}" 
                       class="category-chip bg-white p-6 rounded-lg shadow-md flex flex-col items-center justify-center text-center hover:bg-blue-50 transition-colors">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <span class="font-medium text-gray-800">{{ $category }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Trending News Section -->
    <section id="trending" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-4">Trending Now</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-16">What the world is talking about today</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Sample News Item 1 -->
                <div class="news-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Tech News" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold px-2 py-1 bg-blue-100 text-blue-800 rounded-full">TECHNOLOGY</span>
                            <span class="text-xs text-gray-500">2 hours ago</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">The Future of AI in Everyday Life</h3>
                        <p class="text-gray-600 mb-4">How artificial intelligence is transforming our daily routines and what to expect in 2023.</p>
                        <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
                    </div>
                </div>
                
                <!-- Sample News Item 2 -->
                <div class="news-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Business News" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold px-2 py-1 bg-green-100 text-green-800 rounded-full">BUSINESS</span>
                            <span class="text-xs text-gray-500">5 hours ago</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Global Markets Reach Record Highs</h3>
                        <p class="text-gray-600 mb-4">Stock markets worldwide surge as economic recovery exceeds expectations.</p>
                        <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
                    </div>
                </div>
                
                <!-- Sample News Item 3 -->
                <div class="news-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Sports News" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold px-2 py-1 bg-red-100 text-red-800 rounded-full">SPORTS</span>
                            <span class="text-xs text-gray-500">8 hours ago</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Championship Finals Set After Dramatic Semis</h3>
                        <p class="text-gray-600 mb-4">Underdog team advances to finals after stunning overtime victory.</p>
                        <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block px-8 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition-colors shadow-lg">View All Trending News</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Stay Updated?</h2>
            <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">Join thousands of informed readers who trust NewsHub for their daily news.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-blue-600 font-bold rounded-lg hover:bg-gray-100 transition-colors shadow-lg">Sign Up Free</a>
                <a href="#" class="px-8 py-3 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-blue-600 transition-colors">Take a Tour</a>
            </div>
        </div>
    </section>

  <x-mini.footer />
   

    <script>
        // Simple animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('#features, #categories, #trending').forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>