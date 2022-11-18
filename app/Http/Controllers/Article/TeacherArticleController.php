<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher_article;
use App\Models\Teacher_article_good;
use DateTime;

class TeacherArticleController extends Controller
{
    public function showList()
    {
        $teacher_articles = Teacher_article::get();
            
        return view('article/teacher_article_list')
        ->with(['teacher_articles' => $teacher_articles]);
    }
    
    public function showDetail(Teacher_article $teacher_article)
    {
        //いいねの数を集計
        $goods = $teacher_article->teacher_article_goods()->count();
        
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //teacher_article_goodsテーブル内を検索
        if(\Auth::guard('student')->check()){
            $check_good = $teacher_article->teacher_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = $teacher_article->teacher_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        
        return view('article/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article])
        ->with(['goods' => $goods])
        ->with(['check_good' => $check_good]);
        
        
        //return view('article/teacher_article_detail')
        //    ->with(['teacher_article' => $teacher_article])
        //    ->with(['goods' => $goods]);
        
    }
    
    public function studentGood(Teacher_article $teacher_article)
    {
        //既にいいねしたデータがあるかチェック
        //teacher_article_goodsテーブル内を検索
        $check_good = $teacher_article->teacher_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //Teacher_article_goodからインスタンスを生成し保存
            $good = new Teacher_article_good;
            $good->student_id = \Auth::user()->id;
            $good->teacher_id = null;
            $good->teacher_article_id = $teacher_article->id;
            
            $good->save();
        }
        
        return redirect('/article/teacher_article/' . $teacher_article->id);
    }
    
    public function teacherGood(Teacher_article $teacher_article)
    {
        //既にいいねしたデータがあるかチェック
        //teacher_article_goodsテーブル内を検索
        $check_good = $teacher_article->teacher_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //Teacher_article_goodからインスタンスを生成し保存
            $good = new Teacher_article_good;
            $good->student_id = null;
            $good->teacher_id = \Auth::user()->id;
            
            $good->save();
        }
        
        return redirect('/article/teacher_article/' . $teacher_article->id);
    }
}

