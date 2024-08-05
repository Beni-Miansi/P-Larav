<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;

Route::resource('products', ProductController::class);


Route::resource('services', ServiceController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
