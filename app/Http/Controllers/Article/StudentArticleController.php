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
        $check_good = false;
        
        if(\Auth::guard('student')->check()){
            //student_goodsテーブル内を検索
            $check_good = $student_article->student_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            //teacher_goodsテーブル内を検索
            $check_good = $student_article->teacher_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        
        return view('article/student_article_detail')
        ->with(['student_article' => $student_article])
        ->with(['goods' => $goods])
        ->with(['check_good' => $check_good]);
        
        
        //return view('article/student_article_detail')
        //    ->with(['student_article' => $student_article])
        //    ->with(['goods' => $goods]);
        
    }
    
    public function studentGood(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        //student_goodsテーブル内を検索
        $check_good = $student_article->student_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //studentがいいねしたためStudent_goodからインスタンスを生成
            $good = new Student_good;
            $good->student_article_id = $student_article->id;
            $good->student_id = \Auth::user()->id;
            
            $good->save();
        }
        
        return redirect('/article/student_article/' . $student_article->id);
    }
    
    public function teacherGood(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        //teacher_goodsテーブル内を検索
        $check_good = $student_article->teacher_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //teacherがいいねしたためTeacher_goodからインスタンスを生成
            $good = new Teacher_good;
            $good->student_article_id = $student_article->id;
            $good->teacher_id = \Auth::user()->id;
            
            $good->save();
        }
        
        return redirect('/article/student_article/' . $student_article->id);
    }
}

