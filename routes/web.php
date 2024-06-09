<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::get('/movies',[MovieController::class, 'index']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);
Route::put('/movies/{movie}', [MovieController::class, 'update']);

Route::resource('/movies', MovieController::class);
Route::resource('/genres', GenreController::class);

// Route::get('/genres/create', [GenreController::class, 'create']);
// Route::get('/genres',[GenreController::class, 'index']);
// Route::post('/genres', [GenreController::class, 'store']);
// Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);


Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
Route::put('/reviews/{review}', [ReviewController::class, 'update']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);




