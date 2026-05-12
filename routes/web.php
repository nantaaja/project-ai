<?php

use App\Http\Controllers\ProductivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productivity', [ProductivityController::class, 'index'])->name('productivity.index');
Route::post('/productivity/calculate', [ProductivityController::class, 'calculate'])->name('productivity.calculate');
