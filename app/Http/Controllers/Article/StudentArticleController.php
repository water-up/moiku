<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student_article;
use App\Models\Student_article_good;
use App\Models\Teacher_reaction;
use App\Models\Teacher;
use DateTime;

class StudentArticleController extends GoodController
{
    public function showList()
    {
        $student_articles = 
            Student_article::doesntHave('teacher_article')
            ->get();
        
        return view('article/student_article_list')
        ->with(['student_articles' => $student_articles]);
    }
    
    public function showDetail(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        //GoodControllerのメソッドを使用
        $check_good = $this->checkStudentArticleGood($student_article);
        
        $reactions = Teacher_reaction::where('student_article_id',$student_article->id)->get();
        
        $check_reaction = false;
        //teacher_reactionsテーブル内を検索
        if(\Auth::guard('teacher')->check()){
            $check_reaction = DB::table('teacher_reactions')
                ->where('student_article_id',$student_article->id)
                ->where('teacher_id',\Auth::guard('teacher')->user()->id)
                ->exists();
        }
        
        
        return view('article/student_article_detail')
        ->with(['student_article' => $student_article,
                'check_good' => $check_good,
                'reactions' => $reactions,
                'check_reaction' => $check_reaction]);
    }
}

