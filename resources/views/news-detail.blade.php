@extends('layout')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold text-blue-600">{{ $news['title'] }}</h1>
        <p class="text-gray-500 text-sm mt-1">{{ $news['published_at'] }}</p>
        <img src="{{ $news['image_url'] }}" alt="{{ $news['title'] }}" class="w-full h-96 object-cover my-4 rounded">

        <div class="text-lg text-gray-800 leading-relaxed">{{ $news['content'] }}</div>

        <div class="mt-6 border-t pt-4">
            <p class="text-sm text-gray-500">Source: <a href="{{ $news['source_url'] }}" class="text-blue-600 underline">{{ $news['source_name'] }}</a></p>
        </div>

        <div class="mt-8">
            <h3 class="text-lg font-semibold">Comments (coming soon)</h3>
            <p class="text-gray-500 italic">Your friend’s API will hook into this later.</p>
        </div>
    </div>
@endsection
