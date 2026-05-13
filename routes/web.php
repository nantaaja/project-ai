<?php

use App\Http\Controllers\ProductivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductivityController::class, 'index']);

Route::get('/productivity', [ProductivityController::class, 'index']);

Route::get('/statistics', [ProductivityController::class, 'statistics']);

Route::post('/calculate', [ProductivityController::class, 'calculate'])
    ->name('productivity.calculate');

Route::view('/about', 'productivity.about');

Route::view('/history', 'productivity.history');
