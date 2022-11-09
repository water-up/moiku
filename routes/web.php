<?php

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

Route::view('/', 'top')->name('top');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//=====ログインページ==============================
//生徒
Route::view('/student/login', 'student/login')->name('student.login');
Route::post('/student/login', [App\Http\Controllers\student\LoginController::class, 'login']);
Route::view('/student/register', 'student/register');
Route::post('/student/register', [App\Http\Controllers\student\RegisterController::class, 'register']);
Route::view('/student/home', 'student/home')->middleware('auth:student');
//先生
Route::view('/teacher/login', 'teacher/login')->name('teacher.login');
Route::post('/teacher/login', [App\Http\Controllers\teacher\LoginController::class, 'login']);
Route::view('/teacher/register', 'teacher/register');
Route::post('/teacher/register', [App\Http\Controllers\teacher\RegisterController::class, 'register']);
Route::view('/teacher/home', 'teacher/home')->middleware('auth:teacher');


//=====マイページ==============================
//生徒
Route::get('/mypage/student/log', [App\Http\Controllers\MyPage\Student\LogController::class, 'showLog'])->middleware('auth:student');
Route::get('/mypage/student/log/{student_article}', [App\Http\Controllers\MyPage\Student\LogController::class, 'showDetail'])->middleware('auth:student');

//先生
Route::view('/mypage/teacher/log', 'mypage/teacher/log')->middleware('auth:teacher');


//=====掲示板ページ==============================
//生徒
//先生
//ゲスト