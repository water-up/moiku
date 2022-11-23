<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher_article;
use App\Models\Teacher_article_good;
use DateTime;

class TeacherArticleController extends GoodController
{
    public function showList()
    {
        $teacher_articles = 
            Teacher_article::where('date','>',new DateTime())
            ->get();
            
        return view('article/teacher_article_list')
        ->with(['teacher_articles' => $teacher_articles]);
    }
    
    public function showDetail(Teacher_article $teacher_article)
    {
        //参加者を取得
        $participants = $teacher_article->students()->get();
        
        //既にいいねしたデータがあるかチェック
        //GoodControllerのメソッドを使用
        $check_good = $this->checkTeacherArticleGood($teacher_article);
        
        //参加チェック
        $check_join = $teacher_article->students()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        
        
        return view('article/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article,
                'participants' => $participants,
                'check_good' => $check_good,
                'check_join' => $check_join]);
    }
}

