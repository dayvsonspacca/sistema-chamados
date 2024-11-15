<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{
    LoginController,
    RegisterController,
};

/*
* Login Routes
*/

Route::get('/login',   [LoginController::class, 'create'])->name('login');
Route::post('/login',  [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

/*
* Register Routes
*/

Route::get('/register',  [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);