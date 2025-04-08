<?php

use App\Http\Controllers\ProfileController;
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
    $response = Http::get("http://127.0.0.1:8000/api/news/{$id}");
    if ($response->failed()) {
        abort(404);
    }
    return view('news-detail', ['news' => $response->json()]);
});

Route::get('/dashboard', function () {
    $news = News::all();
    return view('dashboard', ['news' => $news]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
