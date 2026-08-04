<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index']);
Route::get('/training/{slug}', [MainController::class, 'training']);