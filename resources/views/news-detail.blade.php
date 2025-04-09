


<x-app-layout >
    
    <x-slot name="header"> 
  <div class="flex">

  
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Article Header -->
            <div class="text-center mb-10">
                <div class="inline-block bg-gradient-to-r from-purple-600 to-yellow-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                    {{ ucfirst($news['category']) }}
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-4">{{ $news['title'] }}</h1>
                
                <div class="flex items-center justify-center space-x-4">
                    <div class="flex items-center">
                        <div class="h-10 w-10 rounded-full bg-gradient-to-r from-amber-400 to-orange-500 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="ml-2 text-slate-600">Admin</span>
                    </div>
                    <span class="text-gray-400">•</span>
                    <span class="text-gray-500">{{ \Carbon\Carbon::parse($news['published_at'])->format('F j, Y') }}</span>
                    <span class="text-gray-400">•</span>
                    <span class="text-gray-500">5 min read</span>
                </div>
            </div>
        
            <!-- Featured Image -->
            <div class="relative rounded-xl overflow-hidden shadow-xl mb-10 group">
                <img src="{{ $news['image_url'] }}" alt="{{ $news['title'] }}" class="w-full h-auto max-h-[32rem] object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
        
            <!-- Article Content -->
            <article class="prose prose-lg max-w-none mx-auto text-gray-700 mb-16">
                <p class="text-xl text-gray-600 leading-relaxed mb-8">{{ $news['summary'] }}</p>
                
                <div class="border-l-4 border-yellow-500 pl-6 mb-8">
                    <blockquote class="text-gray-600 italic text-xl">"This is an important pull quote that highlights key information from the article."</blockquote>
                </div>
                
                <div class="space-y-6">
                    @foreach(explode("\n", $news['content']) as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </article>
        
            <!-- Article Footer -->
            <div class="border-t border-gray-200 pt-8 mb-12">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                        <span class="text-gray-600">Share:</span>
                        <div class="flex space-x-3">
                            <a href="#" class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center hover:bg-blue-200 transition">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#" class="h-8 w-8 rounded-full bg-blue-100 text-blue-400 flex items-center justify-center hover:bg-blue-200 transition">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="h-8 w-8 rounded-full bg-red-100 text-red-500 flex items-center justify-center hover:bg-red-200 transition">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-6">
                        <!-- Like Button -->
                        <button type="button" class="flex items-center space-x-1 group">
                            <div class="relative">
                                <div class="h-10 w-10 rounded-full bg-gray-100 group-hover:bg-red-50 flex items-center justify-center transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-red-500 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <div class="absolute -top-2 -right-1 bg-red-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    +
                                </div>
                            </div>
                            <span class="text-gray-500 group-hover:text-red-500 transition-all duration-300">1.2K</span>
                        </button>
                        
                        <!-- Comment Button -->
                        <button type="button" class="flex items-center space-x-1 group">
                            <div class="h-10 w-10 rounded-full bg-gray-100 group-hover:bg-blue-50 flex items-center justify-center transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-blue-500 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <span class="text-gray-500 group-hover:text-yellow-500 transition-all duration-300">42</span>
                        </button>
                    </div>
                </div>
            </div>
        
            <!-- Source Attribution -->
            <div class="bg-blue-50 rounded-xl p-6 mb-12">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium text-gray-900">Source Information</h3>
                        <p class="mt-1 text-gray-600">Originally published by <a href="{{ $news['source_url'] }}" class="text-blue-600 hover:text-blue-800 font-medium">{{ $news['source_name'] }}</a></p>
                    </div>
                </div>
            </div>
        
            <!-- Comments Section -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-xl font-bold text-gray-900">Discussion (42)</h3>
                    <p class="mt-1 text-gray-500">Join the conversation</p>
                </div>
                
                <!-- Comment Form -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex space-x-4">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-purple-500 to-blue-500 flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <form>
                                <div class="border border-gray-300 rounded-lg overflow-hidden focus-within:border-blue-500 focus-within:ring-1 focus-within:ring-blue-500">
                                    <label for="comment" class="sr-only">Add your comment</label>
                                    <textarea rows="3" name="comment" id="comment" class="block w-full py-3 px-4 border-0 focus:ring-0 resize-none" placeholder="Add your comment..."></textarea>
                                    <div class="flex justify-between items-center px-4 py-2 bg-gray-50">
                                        <div class="flex space-x-2">
                                            <button type="button" class="p-1 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                                </svg>
                                                <span class="sr-only">Attach file</span>
                                            </button>
                                            <button type="button" class="p-1 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <span class="sr-only">Add emoji</span>
                                            </button>
                                        </div>
                                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                            Post comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Comments List -->
                <div class="divide-y divide-gray-200">
                    <!-- Comment 1 -->
                    <div class="p-6">
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-amber-400 to-orange-500 flex items-center justify-center text-white">
                                    <span>JD</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">John Doe</p>
                                    <div class="flex items-center space-x-2">
                                        <span class="text-xs text-gray-500">2h ago</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                            <span class="sr-only">Options</span>
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-1 text-sm text-gray-700">This is such an insightful article! I never thought about it this way before. The examples really helped clarify the concepts.</p>
                                <div class="mt-3 flex items-center space-x-4">
                                    <button type="button" class="flex items-center space-x-1 text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                        </svg>
                                        <span class="text-xs">12</span>
                                    </button>
                                    <button type="button" class="text-xs text-gray-500 hover:text-gray-700">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comment 2 -->
                    <div class="p-6">
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center text-white">
                                    <span>AS</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">Alice Smith</p>
                                    <div class="flex items-center space-x-2">
                                        <span class="text-xs text-gray-500">4h ago</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                            <span class="sr-only">Options</span>
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-1 text-sm text-gray-700">I agree with most points, but I think the conclusion could be expanded. There's more recent research on this topic that might provide additional insights.</p>
                                <div class="mt-3 flex items-center space-x-4">
                                    <button type="button" class="flex items-center space-x-1 text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                        </svg>
                                        <span class="text-xs">5</span>
                                    </button>
                                    <button type="button" class="text-xs text-gray-500 hover:text-gray-700">Reply</button>
                                </div>
                                
                                <!-- Reply -->
                                <div class="mt-4 pl-6 border-l-2 border-gray-200">
                                    <div class="flex space-x-4">
                                        <div class="flex-shrink-0">
                                            <div class="h-8 w-8 rounded-full bg-gradient-to-r from-blue-400 to-cyan-500 flex items-center justify-center text-white text-xs">
                                                <span>MJ</span>
                                            </div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-gray-900">Michael Johnson</p>
                                                <div class="flex items-center space-x-2">
                                                    <span class="text-xs text-gray-500">2h ago</span>
                                                    <button type="button" class="text-gray-400 hover:text-gray-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                        </svg>
                                                        <span class="sr-only">Options</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-700">@Alice Smith Could you share links to that research? I'd be very interested to read more about it.</p>
                                            <div class="mt-2 flex items-center space-x-4">
                                                <button type="button" class="flex items-center space-x-1 text-gray-500 hover:text-blue-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                    <span class="text-xs">2</span>
                                                </button>
                                                <button type="button" class="text-xs text-gray-500 hover:text-gray-700">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comment 3 -->
                    <div class="p-6">
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-green-400 to-emerald-500 flex items-center justify-center text-white">
                                    <span>RJ</span>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium text-gray-900">Robert Johnson</p>
                                    <div class="flex items-center space-x-2">
                                        <span class="text-xs text-gray-500">1d ago</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                            <span class="sr-only">Options</span>
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-1 text-sm text-gray-700">The author makes some excellent points, especially in the third section. I've shared this with my team as required reading for our next meeting.</p>
                                <div class="mt-3 flex items-center space-x-4">
                                    <button type="button" class="flex items-center space-x-1 text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                        </svg>
                                        <span class="text-xs">8</span>
                                    </button>
                                    <button type="button" class="text-xs text-gray-500 hover:text-gray-700">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Load More Comments -->
                <div class="p-6 text-center">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                        </svg>
                        Load more comments
                    </button>
                </div>
            </div>
               
        </div>
         <div class="mt-12 w-[400px] mx-auto" >   @include('components.bot.bot', ['news' => $news]) </div>
        </div>



        

        
      
    
     
 
    
    
</x-slot>





</x-app-layout>
















