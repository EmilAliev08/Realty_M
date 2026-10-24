<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Отзывы
Route::post('/reviews', [ReviewController::class, 'store'])
    ->middleware('auth')
    ->name('reviews.store');

// Роуты Breeze (аутентификация)
require __DIR__.'/auth.php';