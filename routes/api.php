<?php

use App\Http\Controllers\NewsController;                                                                                                                              

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index']); // Get all news
    Route::get('{id}', [NewsController::class, 'show']); // Get a single news
    Route::post('/', [NewsController::class, 'store']); // Create news
    Route::put('{id}', [NewsController::class, 'update']); // Update news
    Route::delete('{id}', [NewsController::class, 'destroy']); // Delete news
});
