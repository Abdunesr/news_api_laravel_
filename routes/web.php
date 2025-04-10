<?php

use App\Http\Controllers\GeminiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\News;
use Illuminate\Support\Facades\Route;

/* 
Route::get('/', function () {
    $category = request('category');

    // Create a query builder instance
    $newsQuery = News::query();

    // If a category filter is provided, apply it
    if ($category) {
        $newsQuery->where('category', $category);
    }

    // Fetch the filtered news, latest first
    $news = $newsQuery->orderBy('published_at', 'desc')->get();

    return view('welcome', ['news' => $news]);
})->name('home'); */


// In your routes/web.php
Route::get('/category/{category}', function($category) {
    $news = News::where('category', $category)
               ->orderBy('published_at', 'desc')
               ->get();
               
    return view('dashboard', compact('news', 'category'));
})->name('dashboard')->middleware(['auth', 'verified']);

// Update your home route
Route::get('/', function() {
    $category = request('category');
    
    if ($category) {
        return redirect()->route('/category/'.$category, ['category' => $category]);
    }
    
    $news = News::orderBy('published_at', 'desc')->get();
    return view('welcome', compact('news'));
})->name('home');





Route::get('/news/{id}', function ($id) {
    $news =News::findOrFail($id); // Fetch from DB directly
    return view('news-detail', ['news' => $news]);
})->name('news.show');
Route::get('/dashboard', function () {
    $news = News::all();
    return view('dashboard', ['news' => $news]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/post-news', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/post-news', [NewsController::class, 'store'])->name('admin.news.store');
});
Route::post('/bot-response', [GeminiController::class, 'respond']);
Route::fallback(function (){
    return view('error.error');
});

require __DIR__.'/auth.php';
