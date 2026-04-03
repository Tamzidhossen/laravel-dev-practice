<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DemoController;
use App\Http\Middleware\CategoryMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class)
    ->middleware([CategoryMiddleware::class]);


Route::middleware(['Demo'])-> group( function () {

    Route::get('/Demo1/{key}', [DemoController::class, 'Demo1']);
    Route::get('/Demo2', [DemoController::class, 'Demo2']);
    Route::get('/Demo3', [DemoController::class, 'Demo3']);
});

Route::get('/Demo4', [DemoController::class, 'Demo4'])->middleware('Demo');