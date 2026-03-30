<?php

use App\Http\Controllers\CategoryController;
use App\Http\Middleware\CategoryMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class)
    ->middleware([CategoryMiddleware::class]);
