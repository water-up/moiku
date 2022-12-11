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
//先生
Route::view('/teacher/login', 'teacher/login')->name('teacher.login');
Route::post('/teacher/login', [App\Http\Controllers\teacher\LoginController::class, 'login']);
Route::view('/teacher/register', 'teacher/register');
Route::post('/teacher/register', [App\Http\Controllers\teacher\RegisterController::class, 'register']);




//=====マイページ===============================================================
//-----授業管理------------------------------
//生徒
Route::middleware('auth:student')->group(function(){
    Route::get('/mypage/student/log', [App\Http\Controllers\MyPage\Student\LogController::class, 'showLog']);
    Route::get('/mypage/student/log/student_article/{student_article}', [App\Http\Controllers\MyPage\Student\LogController::class, 'showStudentArticleDetail']);
    Route::get('/mypage/student/log/teacher_article/{teacher_article}', [App\Http\Controllers\MyPage\Student\LogController::class, 'showTeacherArticleDetail']);
    Route::get('/mypage/student/log/post', [App\Http\Controllers\MyPage\Student\PostController::class, 'showPostArticle']);
    Route::post('/mypage/student/log/post', [App\Http\Controllers\MyPage\Student\PostController::class, 'postArticle']);
    Route::post('/mypage/student/log/teacher_article/{teacher_article}/review', [App\Http\Controllers\MyPage\ReviewController::class, 'postReview']);
    
});
//先生
Route::middleware('auth:teacher')->group(function(){
    Route::get('/mypage/teacher/log', [App\Http\Controllers\MyPage\Teacher\LogController::class, 'showLog']);
    Route::get('/mypage/teacher/log/student_article/{student_article}', [App\Http\Controllers\MyPage\Teacher\LogController::class, 'showStudentArticleDetail'])->name('mypage_student_article_detail');
    Route::get('/mypage/teacher/log/teacher_article/{teacher_article}', [App\Http\Controllers\MyPage\Teacher\LogController::class, 'showTeacherArticleDetail']);
    Route::get('/mypage/teacher/log/student_article/{student_article}/post', [App\Http\Controllers\MyPage\Teacher\PostController::class, 'showPostArticle']);
    Route::post('/mypage/teacher/log/student_article/{student_article}/post', [App\Http\Controllers\MyPage\Teacher\PostController::class, 'postArticle']);
    Route::get('/mypage/teacher/log/post', [App\Http\Controllers\MyPage\Teacher\PostController::class, 'showNewPostArticle']);
    Route::post('/mypage/teacher/log/post', [App\Http\Controllers\MyPage\Teacher\PostController::class, 'postNewArticle']);
    
});


//-----チャット------------------------------
//生徒
Route::view('/mypage/student/chat', 'mypage/chat')->middleware('auth:student');
//先生
Route::view('/mypage/teacher/chat', 'mypage/chat')->middleware('auth:teacher');


//-----プロフィール------------------------------
//生徒
Route::middleware('auth:student')->group(function(){
    Route::get('/mypage/student/profile', [App\Http\Controllers\MyPage\Student\ProfileController::class, 'showProfile']);
    Route::get('/mypage/student/profile/edit', [App\Http\Controllers\MyPage\Student\ProfileController::class, 'showEditProfile']);
    Route::put('/mypage/student/profile/edit', [App\Http\Controllers\MyPage\Student\ProfileController::class, 'editProfile']);
});
//先生
Route::middleware('auth:teacher')->group(function(){
    Route::get('/mypage/teacher/profile', [App\Http\Controllers\MyPage\Teacher\ProfileController::class, 'showProfile']);
    Route::get('/mypage/teacher/profile/edit', [App\Http\Controllers\MyPage\Teacher\ProfileController::class, 'showEditProfile']);
    Route::put('/mypage/teacher/profile/edit', [App\Http\Controllers\MyPage\Teacher\ProfileController::class, 'editProfile']);
});


//=====Moikuについて============================================================
Route::view('/guide', 'guide');




//=====掲示板ページ=============================================================
//-----生徒の投稿記事（先生募集掲示板）------------------------------
Route::get('/article/student_article', [App\Http\Controllers\Article\StudentArticleController::class, 'showList']);
Route::get('/article/student_article/{student_article}', [App\Http\Controllers\Article\StudentArticleController::class, 'showDetail'])->name('student_article_detail');
//教え隊の立候補機能
Route::middleware('auth:teacher')->group(function(){
    Route::get('/article/student_article/{student_article}/reaction', [App\Http\Controllers\Article\ReactionController::class, 'showReaction'])->name('reaction_form');
    Route::post('/article/student_article/{student_article}/reaction', [App\Http\Controllers\Article\ReactionController::class, 'postReaction']);
    //実装中
    Route::delete('/article/student_article/{student_article}/reaction/{teacher_reaction}', [App\Http\Controllers\Article\ReactionController::class, 'deleteReaction']);
    
});
//学び隊のBESTコメント選択
Route::middleware('auth:student')->group(function(){
    Route::put('/article/student_article/{student_article}/match', [App\Http\Controllers\Article\ReactionController::class, 'selectMatch']);
    Route::put('/article/student_article/{student_article}/reset_match', [App\Http\Controllers\Article\ReactionController::class, 'resetMatch']);
});

//-----先生の投稿記事（生徒募集掲示板）------------------------------
Route::get('/article/teacher_article', [App\Http\Controllers\Article\TeacherArticleController::class, 'showList']);
Route::get('/article/teacher_article/{teacher_article}', [App\Http\Controllers\Article\TeacherArticleController::class, 'showDetail']);
Route::middleware('auth:student')->group(function(){
    Route::post('/article/teacher_article/{teacher_article}/join', [App\Http\Controllers\Article\JoinController::class, 'joinClass']);
    Route::delete('/article/teacher_article/{teacher_article}/join', [App\Http\Controllers\Article\JoinController::class, 'cancelClass']);
});


//-----いいね機能------------------------------
//生徒
Route::middleware('auth:student')->group(function(){
    Route::post('/student_good/student_article/{student_article}', [GoodController::class, 'studentArticleGood']);
    Route::post('/student_good/teacher_article/{teacher_article}', [GoodController::class, 'teacherArticleGood']);
});
//先生
Route::middleware('auth:teacher')->group(function(){
    Route::post('/teacher_good/student_article/{student_article}', [GoodController::class, 'studentArticleGood']);
    Route::post('/teacher_good/teacher_article/{teacher_article}', [GoodController::class, 'teacherArticleGood']);
});

