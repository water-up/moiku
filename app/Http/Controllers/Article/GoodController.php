<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;
use App\Models\Teacher_article;
use App\Models\Student_article_good;
use App\Models\Teacher_article_good;
use DateTime;

class GoodController extends Controller
{
    public function showStudentArticleGood()
    {
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //student_article_goodsテーブル内を検索
        if(\Auth::guard('student')->check()){
            $check_good = Student_article::student_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = Student_article::student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        return ([$check_good,$reactions]);
    }
    
    public function studentArticleGood(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        //student_article_goodsテーブル内を検索
        if(\Auth::guard('student')->check()){
            $check_good = $student_article->student_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = $student_article->student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //Student_article_goodからインスタンスを生成し保存
            $good = new Student_article_good;
            if(\Auth::guard('student')->check()){
                $good->student_id = \Auth::user()->id;
                $good->teacher_id = null;
            }elseif(\Auth::guard('teacher')->check()){
                $good->student_id = null;
                $good->teacher_id = \Auth::user()->id;
            }
            $good->student_article_id = $student_article->id;
            
            $good->save();
        }
        
        return back();
    }
    
    public function teacherArticleGood(Teacher_article $teacher_article)
    {
        //既にいいねしたデータがあるかチェック
        //teacher_article_goodsテーブル内を検索
        if(\Auth::guard('student')->check()){
            $check_good = $teacher_article->teacher_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = $teacher_article->teacher_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //Teacher_article_goodからインスタンスを生成し保存
            $good = new Teacher_article_good;
            if(\Auth::guard('student')->check()){
                $good->student_id = \Auth::user()->id;
                $good->teacher_id = null;
            }elseif(\Auth::guard('teacher')->check()){
                $good->student_id = null;
                $good->teacher_id = \Auth::user()->id;
            }
            $good->teacher_article_id = $teacher_article->id;
            
            $good->save();
        }
        
        return back();
    }
}