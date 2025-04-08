<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
                  <!-- Original Dashboard Content -->
                  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Added News Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-semibold mb-8">Latest News</h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($news as $item)
                        <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                            <a href="{{ url('/news/' . $item['id']) }}" class="block">
                                <img src="{{ $item['image_url'] }}" alt="{{ $item['title'] }}" 
                                    class="w-full h-48 object-cover hover:opacity-90 transition-opacity">
                            </a>
                            <div class="p-5">
                                <a href="{{ url('/news/' . $item['id']) }}" class="hover:text-blue-600 transition-colors">
                                    <h3 class="text-xl font-bold mb-2 line-clamp-2">{{ $item['title'] }}</h3>
                                </a>
                                <p class="text-gray-600 mb-4 line-clamp-3">{{ $item['summary'] }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-600 rounded-full capitalize">
                                        {{ $item['category'] }}
                                    </span>
                                    <span class="text-xs text-gray-500">
                                        {{ \Carbon\Carbon::parse($item['published_at'])->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($news->isEmpty())
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg">No news articles found.</p>
                    </div>
                @endif
            </div>
            
  
            </div>
        </div>
    </div>
</x-app-layout>