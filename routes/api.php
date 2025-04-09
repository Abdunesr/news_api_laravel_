<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;                                                                                                                              
use App\Http\Controllers\CommentController;                                                                                                                              
use App\Http\Controllers\LikeController;                                                                                                                              

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index']); // Get all news
    Route::get('{id}', [NewsController::class, 'show']); // Get a single news
    Route::post('/', [NewsController::class, 'store']); // Create news
    Route::put('{id}', [NewsController::class, 'update']); // Update news
    Route::delete('{id}', [NewsController::class, 'destroy']); // Delete news
});

Route::middleware('auth:sanctum')->group(function () {
    // Comments
    Route::post('/news/{newsId}/comments', [CommentController::class, 'store']);
    Route::get('/news/{newsId}/comments', [CommentController::class, 'index']);
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']);

    // Likes (by newsId)
    Route::post('/news/{newsId}/likes', [LikeController::class, 'store']);
    Route::get('/news/{newsId}/likes', [LikeController::class, 'index']);
    Route::delete('/news/{newsId}/likes', [LikeController::class, 'destroy']);

    // 🔄 Like toggle using request body
    Route::post('/likes/toggle', [LikeController::class, 'toggle']);
});

