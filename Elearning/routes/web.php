<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'postAuthLogin']);

Route::get('/register',[UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class, 'post_register']);

Route::get('/profile/change-password', [UserController::class, 'change_password'])->name('change_password');
Route::post('/profile/update-password', [UserController::class, 'update_password'])->name('update_password');

Route::get('logout',[UserController::class, 'logout']);

Route::get('/profile',[ProfileController::class, 'index'])->name('profile');

Route::get('/profile/update-profile',[ProfileController::class, 'update_profile'])->name('update_profile');
Route::post('/profile/update-profile',[ProfileController::class, 'change_profile'])->name('change_profile');

Route::get('/lecture/list-course',[LectureController::class, 'list_course'])->name('list_course');
Route::get('/lecture/upload-course',[LectureController::class, 'upload_course'])->name('upload_course');
Route::post('/lecture/upload-course',[LectureController::class, 'post_upload_course'])->name('post_upload_course');
Route::get('/lecture/update-course',[LectureController::class, 'update_course'])->name('update_course');
Route::post('/lecture/update-course',[LectureController::class, 'post_update_course'])->name('post_update_course');





