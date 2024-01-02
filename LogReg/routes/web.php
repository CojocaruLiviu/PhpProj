<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'login']);

Route::get('/inregistrare', [MainController::class, 'inregistrare']);

Route::get('/layout', [MainController::class, 'layout']);

Route::post('/inregistrare', [MainController::class, 'reviewinfo']);

Route::post('/inregistrare/ceck', [MainController::class, 'reviewceck']);


