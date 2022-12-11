<?php

namespace App\Http\Controllers\MyPage\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Teacher_article;
use App\Models\Student_article;
use App\Models\Prefecture;
use App\Models\Secondary_category;


class PostController extends Controller
{
    public function showPostArticle(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //student_article_goodsテーブル内を検索
        $check_good = $student_article->student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        $secondary_categories = Secondary_category::get();
        $prefectures = Prefecture::get();
        
        return view('mypage/teacher/post_article')
        ->with(['student_article' => $student_article,
                'check_good' => $check_good,
                'prefectures' => $prefectures,
                'secondary_categories' => $secondary_categories]);
    }
    
    public function postArticle(Request $request, Student_article $student_article)
    {
        //記事の投稿
        $teacher_article = new Teacher_article;
        $teacher_article->teacher_id = \Auth::user()->id;
        $teacher_article->student_article_id = $student_article->id;
        $teacher_article->fill($request->all())->save();
        
        //studentを参加者リストに追加
        $student = Student::find($student_article->student_id);
        
        $student->teacher_articles()->attach($teacher_article->id);
        
        return redirect('/mypage/teacher/log');
    }
    
    
    
    public function showNewPostArticle()
    {
        $secondary_categories = Secondary_category::get();
        $prefectures = Prefecture::get();
        
        return view('mypage/teacher/post_article')
        ->with(['prefectures' => $prefectures,
                'secondary_categories' => $secondary_categories]);
    }
    
    public function postNewArticle(Request $request)
    {
        $teacher_article = new Teacher_article;
        $teacher_article->teacher_id = \Auth::user()->id;
        $teacher_article->student_article_id = null;
        $teacher_article->fill($request->all())->save();
        
        return redirect('/mypage/teacher/log/teacher_article/' . $teacher_article->id);
    }
}
