<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('home');
});
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::post('/login',[HomeController::class, 'postAuthLogin']);

Route::get('/register',[HomeController::class, 'register'])->name('register');
Route::post('/register',[HomeController::class, 'post_register']);

Route::get('logout',[HomeController::class, 'logout']);

Route::get('/profile',[ProfileController::class, 'index'])->name('profile');

Route::get('/profile/update-profile',[ProfileController::class, 'update_profile'])->name('update_profile');
Route::post('/profile/update-profile',[ProfileController::class, 'change_profile'])->name('change_profile');

Route::get('/profile/change-password', [ProfileController::class, 'change_password'])->name('change_password');
Route::post('/profile/update-password', [ProfileController::class, 'update_password'])->name('update_password');



