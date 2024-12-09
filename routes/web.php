<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/show_data', [MainController::class, 'showData']);