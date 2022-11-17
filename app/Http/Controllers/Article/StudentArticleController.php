<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;
use App\Models\Student_good;
use DateTime;

class StudentArticleController extends Controller
{
    public function showList()
    {
        $student_articles = Student_article::get();
            
        return view('article/student_article_list')
        ->with(['student_articles' => $student_articles]);
    }
    
    public function showDetail(Student_article $student_article)
    {
        //いいねの数を集計
        $student_goods = $student_article->student_goods()->count();
        $teacher_goods = $student_article->teacher_goods()->count();
        $goods = $student_goods + $teacher_goods;
        
        //既にいいねしたデータがあるかチェック
        /*
        if(\Auth::guard('student')->check()){
            $check_good = $student_article->student_goods()->where('student_id',\Auth::user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = $student_article->teacher_goods()->where('teacher_id',\Auth::user()->id)->exists();
        }
        
        
        if(\Auth::check()){
            return view('article/student_article_detail')
            ->with(['student_article' => $student_article])
            ->with(['goods' => $goods])
            ->with(['check_good' => $check_good]);
        }else{
            return view('article/student_article_detail')
            ->with(['student_article' => $student_article])
            ->with(['goods' => $goods]);
        }
        */
        
        return view('article/student_article_detail')
            ->with(['student_article' => $student_article])
            ->with(['goods' => $goods]);
        
    }
    
    public function studentGood(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        $check_good = $student_article->student_goods()->where('student_id',\Auth::user()->id)->exists();
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            $good = new Student_good;
            $good->student_id = \Auth::user()->id;
            $good->student_article_id = $student_article->id;
            
            $good->save();
        }
        
        return redirect('/article/student_article/' . $student_article->id);
    }
}

