<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('/login',[HomeController::class, 'login'])->name('login');

Route::get('/register',[HomeController::class, 'register'])->name('register');
Route::post('/register',[HomeController::class, 'post_register']);

//Route::get('/login',[HomeController::class, 'getAuthLogin']);
Route::post('/login',[HomeController::class, 'postAuthLogin']);

