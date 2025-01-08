<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\saludar;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);