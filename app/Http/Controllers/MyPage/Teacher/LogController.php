<?php

namespace App\Http\Controllers\MyPage\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;
use App\Models\Teacher_article;
use App\Models\Student_article_good;
use App\Models\Teacher_article_good;
use App\Models\Teacher;
use App\Models\Teacher_reaction;
use DateTime;

//use App\Models\Teacher_article;

class LogController extends Controller
{
    public function showLog()
    {
        //参加している授業======================================================
        $projecting_articles =
            Teacher::find(\Auth::user()->id)->teacher_articles()
            ->where('date','>',new DateTime())
            ->get();
            
            
        //ユーザーの投稿========================================================
        //マッチ済みの投稿
        $matched_articles =
            Teacher::find(\Auth::user()->id)->student_articles()
            ->doesntHave('teacher_article')
            ->get();
            
        //マッチ待ちの投稿
        $my_articles =
            Teacher::find(\Auth::user()->id)->teacher_reactions()
            ->whereHas('student_article',function($query){
                $query->where('teacher_id',null);
            })
            ->get();
            
            
        //ユーザーの過去の授業==================================================
        //reviewしていない授業
        $not_reviewed_articles =
            Teacher::find(\Auth::user()->id)->teacher_articles()
            ->where('date','<=',new DateTime())
            ->whereDoesntHave('reviews', function ($query) {
                $query->where('teacher_id', \Auth::user()->id);})
            ->get();
            
        //reviewした授業
        $reviewed_articles =
            Teacher::find(\Auth::user()->id)->teacher_articles()
            ->where('date','<=',new DateTime())
            ->whereHas('reviews', function ($query) {
                $query->where('teacher_id', \Auth::user()->id);})
            ->get();
            
            
        return view('mypage/teacher/log')
        ->with(['projecting_articles' => $projecting_articles,
                'matched_articles' => $matched_articles,
                'my_articles' => $my_articles,
                'not_reviewed_articles' => $not_reviewed_articles,
                'reviewed_articles' => $reviewed_articles]);
    }
    
    public function showTeacherArticleDetail(Teacher_article $teacher_article)
    {
        //参加者を取得
        $participants = $teacher_article->students()->get();
        
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //teacher_article_goodsテーブル内を検索
        $check_good = $teacher_article->teacher_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        
        return view('mypage/teacher/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article,
                'participants' => $participants,
                'check_good' => $check_good]);
    }
    
    public function showStudentArticleDetail(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //student_article_goodsテーブル内を検索
        $check_good = $student_article->student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        $reactions = Teacher_reaction::where('student_article_id',$student_article->id)->get();
        
        
        return view('mypage/teacher/student_article_detail')
        ->with(['student_article' => $student_article,
                'check_good' => $check_good,
                'reactions' => $reactions]);
    }
    
    public function studentArticleGood(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        //student_article_goodsテーブル内を検索
        $check_good = $student_article->student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        
        //データが存在しない場合、新規データを作成
        if(!$check_good){
            //Student_article_goodからインスタンスを生成し保存
            $good = new Student_article_good;
            $good->student_id = null;
            $good->teacher_id = \Auth::user()->id;
            $good->student_article_id = $student_article->id;
            
            $good->save();
        }
        
        return redirect('/mypage/teacher/log/student_article/' . $student_article->id);
    }
    
    public function teacherArticleGood(Teacher_article $teacher_article)
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
            $good->teacher_article_id = $teacher_article->id;
            
            $good->save();
        }
        
        return redirect('/mypage/teacher/log/teacher_article/' . $teacher_article->id);
    }
}
