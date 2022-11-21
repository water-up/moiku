<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\GoodController;

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

//=====ログインページ===========================================================
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


//=====マイページ===============================================================
//-----授業管理------------------------------
//生徒
Route::get('/mypage/student/log', [App\Http\Controllers\MyPage\Student\LogController::class, 'showLog'])->middleware('auth:student');
Route::get('/mypage/student/log/student_article/{student_article}', [App\Http\Controllers\MyPage\Student\LogController::class, 'showStudentArticleDetail'])->middleware('auth:student');
Route::get('/mypage/student/log/teacher_article/{teacher_article}', [App\Http\Controllers\MyPage\Student\LogController::class, 'showTeacherArticleDetail'])->middleware('auth:student');
Route::get('/mypage/student/log/post', [App\Http\Controllers\MyPage\Student\ArticleController::class, 'showPostArticle'])->middleware('auth:student');
Route::post('/mypage/student/log/post', [App\Http\Controllers\MyPage\Student\ArticleController::class, 'postArticle'])->middleware('auth:student');
//先生
Route::get('/mypage/teacher/log', [App\Http\Controllers\MyPage\Teacher\LogController::class, 'showLog'])->middleware('auth:teacher');
Route::get('/mypage/teacher/log/student_article/{student_article}', [App\Http\Controllers\MyPage\Teacher\LogController::class, 'showStudentArticleDetail'])->middleware('auth:teacher');
Route::get('/mypage/teacher/log/teacher_article/{teacher_article}', [App\Http\Controllers\MyPage\Teacher\LogController::class, 'showTeacherArticleDetail'])->middleware('auth:teacher');


//-----チャット------------------------------
//生徒
Route::view('/mypage/student/chat', 'mypage/chat')->middleware('auth:student');
//先生
Route::view('/mypage/teacher/chat', 'mypage/chat')->middleware('auth:teacher');

//-----プロフィール------------------------------
//生徒
Route::get('/mypage/student/profile', [App\Http\Controllers\MyPage\Student\ProfileController::class, 'showProfile'])->middleware('auth:student');
Route::get('/mypage/student/profile/edit', [App\Http\Controllers\MyPage\Student\ProfileController::class, 'showEditProfile'])->middleware('auth:student');
Route::put('/mypage/student/profile/edit', [App\Http\Controllers\MyPage\Student\ProfileController::class, 'editProfile'])->middleware('auth:student');
//先生
Route::get('/mypage/teacher/profile', [App\Http\Controllers\MyPage\Teacher\ProfileController::class, 'showProfile'])->middleware('auth:teacher');
Route::get('/mypage/teacher/profile/edit', [App\Http\Controllers\MyPage\Teacher\ProfileController::class, 'showEditProfile'])->middleware('auth:teacher');
Route::put('/mypage/teacher/profile/edit', [App\Http\Controllers\MyPage\Teacher\ProfileController::class, 'editProfile'])->middleware('auth:teacher');

//-----Moikuについて------------------------------
//生徒
Route::view('/mypage/student/guide', 'mypage/guide')->middleware('auth:student');
//先生
Route::view('/mypage/teacher/guide', 'mypage/guide')->middleware('auth:teacher');

//=====掲示板ページ=============================================================
//-----生徒の投稿記事（先生募集掲示板）------------------------------
Route::get('/article/student_article', [App\Http\Controllers\Article\StudentArticleController::class, 'showList']);
Route::get('/article/student_article/{student_article}', [App\Http\Controllers\Article\StudentArticleController::class, 'showDetail'])->name('student_article_detail');
Route::post('/article/student_article/{student_article}/student_good', [GoodController::class, 'studentArticleGood'])->middleware('auth:student');
Route::post('/article/student_article/{student_article}/teacher_good', [GoodController::class, 'studentArticleGood'])->middleware('auth:teacher');
Route::get('/article/student_article/{student_article}/reaction', [App\Http\Controllers\Article\StudentArticleController::class, 'showReaction'])->middleware('auth:teacher')->name('reaction_form');
Route::post('/article/student_article/{student_article}/reaction', [App\Http\Controllers\Article\StudentArticleController::class, 'postReaction'])->middleware('auth:teacher');


//-----先生の投稿記事（生徒募集掲示板）------------------------------
Route::get('/article/teacher_article', [App\Http\Controllers\Article\TeacherArticleController::class, 'showList']);
Route::get('/article/teacher_article/{teacher_article}', [App\Http\Controllers\Article\TeacherArticleController::class, 'showDetail']);
Route::post('/article/teacher_article/{teacher_article}/student_good', [GoodController::class, 'teacherArticleGood'])->middleware('auth:student');
Route::post('/article/teacher_article/{teacher_article}/teacher_good', [GoodController::class, 'teacherArticleGood'])->middleware('auth:teacher');


//-----いいね機能------------------------------
//生徒
Route::post('/student_good/{student_article}', [GoodController::class, 'studentArticleGood'])->middleware('auth:student');
Route::post('/student_good/{teacher_article}', [GoodController::class, 'teacherArticleGood'])->middleware('auth:student');
//先生
Route::post('/teacher_good/{student_article}', [GoodController::class, 'studentArticleGood'])->middleware('auth:teacher');
Route::post('/teacher_good/{teacher_article}', [GoodController::class, 'teacherArticleGood'])->middleware('auth:teacher');







//ゲスト

