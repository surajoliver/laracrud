<?php

use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tutorials', TutorController::class)->name('tutorials');
Route::patch('/users/update2/{user}', [Controllers\UserController::class, 'update2'])->name('users.update2');
Route::resource('users', Controllers\UserController::class);

Route::resource('products', Controllers\ProductController::class);
Route::resource('categories', Controllers\CategoryController::class);

