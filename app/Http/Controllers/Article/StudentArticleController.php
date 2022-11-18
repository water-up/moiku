<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;
use App\Models\Student_article_good;
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
        $goods = $student_article->student_article_goods()->count();
        
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //student_article_goodsテーブル内を検索
        if(\Auth::guard('student')->check()){
            $check_good = $student_article->student_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = $student_article->student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        
        return view('article/student_article_detail')
        ->with(['student_article' => $student_article,
                'goods' => $goods,
                'check_good' => $check_good]);
        
        
        //return view('article/student_article_detail')
        //    ->with(['student_article' => $student_article])
        //    ->with(['goods' => $goods]);
        
    }
    
    public function studentGood(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        //student_article_goodsテーブル内を検索
        $check_good = $student_article->student_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //Student_article_goodからインスタンスを生成し保存
            $good = new Student_article_good;
            $good->student_id = \Auth::user()->id;
            $good->teacher_id = null;
            $good->student_article_id = $student_article->id;
            
            $good->save();
        }
        
        return redirect('/article/student_article/' . $student_article->id);
    }
    
    public function teacherGood(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        //teacher_article_goodsテーブル内を検索
        $check_good = $student_article->teacher_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //Student_article_goodからインスタンスを生成し保存
            $good = new Student_article_good;
            $good->student_id = null;
            $good->teacher_id = \Auth::user()->id;
            
            $good->save();
        }
        
        return redirect('/article/student_article/' . $student_article->id);
    }
}

