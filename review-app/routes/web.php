<?php

namespace App\Http\MainController;

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/review', [MainController::class, 'review']);
Route::post('/review/ceck', [MainController::class, 'review_ceck']);

