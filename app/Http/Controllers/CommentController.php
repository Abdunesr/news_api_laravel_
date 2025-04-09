<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Add a comment to a news article
    public function store(Request $request, $newsId)
    {
        $request->validate([
            'news_id' => 'required|exists:news,id',
            'comment' => 'required|string|max:1000',
        ]);

        $user = Auth::user();
        $news = News::findOrFail($newsId);

        $comment = $news->comments()->create([
            'user_id' => $user->id,
            'news_id' => $request->news_id,
            'comment' => $request->comment,
        ]);

        return response()->json($comment, 201);
    }

    // Fetch all comments for a news article
    public function index($newsId)
    {
        $news = News::findOrFail($newsId);
        $comments = $news->comments()->with('user')->latest()->get();

        return response()->json($comments);
    }

    // Optionally delete a comment
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::user()->id !== $comment->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $comment->delete();
        return response()->json(['message' => 'Comment deleted']);
    }
}
