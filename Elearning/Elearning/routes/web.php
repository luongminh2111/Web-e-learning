<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',                                             function () {
    return view('home');
});
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'postAuthLogin']);

Route::get('/register',[UserController::class, 'register'])->name('register');
Route::post('/register',[UserController::class, 'post_register']);

Route::get('/profile/change-password', [UserController::class, 'change_password'])->name('change_password');
Route::post('/profile/update-password', [UserController::class, 'update_password'])->name('update_password');

Route::get('logout',[UserController::class, 'logout'])->name('logout');

Route::get('/profile',[ProfileController::class, 'index'])->name('profile');

Route::get('/profile/update-profile',[ProfileController::class, 'update_profile'])->name('update_profile');
Route::post('/profile/update-profile',[ProfileController::class, 'change_profile'])->name('change_profile');

Route::get('/lecture/list-course',[LectureController::class, 'list_course'])->name('list_course');
Route::get('/lecture/upload-course',[LectureController::class, 'upload_course'])->name('upload_course');
Route::post('/lecture/upload-course',[LectureController::class, 'post_upload_course'])->name('post_upload_course');

Route::get('/lecture/update-course',[LectureController::class, 'update_course'])->name('update_course');
Route::post('/lecture/update-course',[LectureController::class, 'post_update_course'])->name('post_update_course');
Route::post('/lecture/update-course',[LectureController::class, 'find_course'])->name('find_course_id');

Route::get('/library',[LibraryController::class, 'show'])->name('show_library');

Route::get('/library/list-documents',[LibraryController::class, 'list_documents'])->name('list_documents');
Route::get('/library/upload-documents',[LibraryController::class, 'upload_documents'])->name('upload_documents');
Route::post('/library/upload-documents',[LibraryController::class, 'post_upload_documents'])->name('post_upload_documents');

Route::get('/library/update-documents',[LibraryController::class, 'update_documents'])->name('update_documents');
Route::post('/library/update-documents',[LibraryController::class, 'post_update_documents'])->name('post_update_documents');
Route::post('/library/update-documents',[LibraryController::class, 'find_documents'])->name('find_documents');


Route::get('/library/view/{is}',[LibraryController::class,'views'])->name('views');

Route::get('/library/grade_12',[LibraryController::class,'view_grade_12'])->name('view_grade_12');
Route::get('/library/grade_10',[LibraryController::class,'view_grade_10'])->name('view_grade_10');
Route::get('/library/grade_9',[LibraryController::class,'view_grade_9'])->name('view_grade_9');
Route::get('/library/grade_8',[LibraryController::class,'view_grade_8'])->name('view_grade_8');
Route::get('/library/grade_7',[LibraryController::class,'view_grade_7'])->name('view_grade_7');
Route::get('/library/grade_6',[LibraryController::class,'view_grade_6'])->name('view_grade_6');
Route::get('/library/grade_5',[LibraryController::class,'view_grade_5'])->name('view_grade_5');
Route::get('/library/grade_4',[LibraryController::class,'view_grade_4'])->name('view_grade_4');
Route::get('/library/grade_3',[LibraryController::class,'view_grade_3'])->name('view_grade_3');
Route::get('/library/grade_2',[LibraryController::class,'view_grade_2'])->name('view_grade_2');
Route::get('/library/grade_1',[LibraryController::class,'view_grade_1'])->name('view_grade_1');
Route::get('/library/grade_11',[LibraryController::class,'view_grade_11'])->name('view_grade_11');


