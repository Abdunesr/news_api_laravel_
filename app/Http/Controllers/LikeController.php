<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    // Like a news article (using URL param)
    public function store($newsId)
    {
        $user = Auth::user();
        $news = News::findOrFail($newsId);

        $existingLike = $news->likes()->where('user_id', $user->id)->first();

        if ($existingLike) {
            return response()->json(['message' => 'You already liked this news'], 409);
        }

        $like = $news->likes()->create([
            'user_id' => $user->id,
        ]);

        return response()->json($like, 201);
    }

    // Toggle like or unlike using request body (POST /api/likes/toggle)
    public function toggle(Request $request)
    {
        $request->validate([
            'news_id' => 'required|exists:news,id'
        ]);

        $user = Auth::user();

        $like = Like::where('news_id', $request->news_id)
                    ->where('user_id', $user->id)
                    ->first();

        if ($like) {
            $like->delete();
            return response()->json(['message' => 'Unliked']);
        } else {
            Like::create([
                'user_id' => $user->id,
                'news_id' => $request->news_id
            ]);
            return response()->json(['message' => 'Liked']);
        }
    }

    // Fetch likes for a news article
    public function index($newsId)
    {
        $news = News::findOrFail($newsId);
        $likes = $news->likes()->with('user')->get();

        return response()->json($likes);
    }

    // Optionally unlike (delete like)
    public function destroy($newsId)
    {
        $user = Auth::user();
        $news = News::findOrFail($newsId);

        $like = $news->likes()->where('user_id', $user->id)->first();

        if (!$like) {
            return response()->json(['message' => 'Like not found'], 404);
        }

        $like->delete();
        return response()->json(['message' => 'Like removed']);
    }
}
