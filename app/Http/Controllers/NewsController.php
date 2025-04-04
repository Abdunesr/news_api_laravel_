<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all(); // Retrieve all news
        return response()->json($news);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'summary' => 'required|string',
            'category' => 'required|in:sports,politics,entertainment,technology,science',
            'source_name' => 'required|string|max:255',
            'source_url' => 'required|url',
            'published_at' => 'nullable|date',
            'status' => 'required|in:draft,published,archived',
            'image_url' => 'nullable|url',
            'video_url' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Create a new news article
        $news = News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'summary' => $request->summary,
            'category' => $request->category,
            'source_name' => $request->source_name,
            'source_url' => $request->source_url,
            'published_at' => $request->published_at,
            'status' => $request->status,
            'image_url' => $request->image_url,
            'video_url' => $request->video_url,
        ]);

        return response()->json($news, 201); // Return created news
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);

        if (!$news) {
            return response()->json(['message' => 'News not found'], 404);
        }

        return response()->json($news);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::find($id);

        if (!$news) {
            return response()->json(['message' => 'News not found'], 404);
        }

        // Validate the request
        $validator = Validator::make($request->all(), [
            'title' => 'string|max:255',
            'content' => 'string',
            'summary' => 'string',
            'category' => 'in:sports,politics,entertainment,technology,science',
            'source_name' => 'string|max:255',
            'source_url' => 'url',
            'published_at' => 'nullable|date',
            'status' => 'in:draft,published,archived',
            'image_url' => 'nullable|url',
            'video_url' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Update news article
        $news->update($request->only([
            'title', 'content', 'summary', 'category', 'source_name', 'source_url', 
            'published_at', 'status', 'image_url', 'video_url'
        ]));

        // If title is updated, update the slug
        if ($request->has('title')) {
            $news->slug = Str::slug($request->title);
            $news->save();
        }

        return response()->json($news);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);

        if (!$news) {
            return response()->json(['message' => 'News not found'], 404);
        }

        $news->delete();
        return response()->json(['message' => 'News deleted successfully']);
    
    }
}
