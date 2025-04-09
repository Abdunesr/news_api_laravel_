<?php

use App\Http\Controllers\GeminiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    $category = request('category');
    $news = News::all(); // or News::where(...)->get()

    if ($category) {
        $news = $news->where('category', $category)->values();
    }

    return view('welcome', ['news' => $news]);

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

require __DIR__.'/auth.php';
