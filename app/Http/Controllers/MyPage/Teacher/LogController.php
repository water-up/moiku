<?php

namespace App\Http\Controllers\MyPage\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student_article;
use App\Models\Teacher_article;
use App\Models\Student_article_good;
use App\Models\Teacher_article_good;
use App\Models\Teacher;
use App\Models\Teacher_reaction;
use App\Models\Review;
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
        $past_articles =
            Teacher::find(\Auth::user()->id)->teacher_articles()
            ->where('date','<=',new DateTime())
            ->get();
            
            
            
        return view('mypage/teacher/log')
        ->with(['projecting_articles' => $projecting_articles,
                'matched_articles' => $matched_articles,
                'my_articles' => $my_articles,
                'past_articles' => $past_articles]);
    }
    
    public function showTeacherArticleDetail(Teacher_article $teacher_article)
    {
        //参加者を取得
        $participants = $teacher_article->students()->get();
        
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //teacher_article_goodsテーブル内を検索
        $check_good = $teacher_article->teacher_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        //日付チェック
        if($teacher_article->date > new DateTime()){
            $check_date = true;
        }
        else{
            $check_date = false;
        }
        
        $reviews = $teacher_article->reviews()->get();
        
        $average = $reviews->avg('score');
        
        
        return view('mypage/teacher/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article,
                'participants' => $participants,
                'check_good' => $check_good,
                'check_date' => $check_date,
                'reviews' => $reviews,
                'average' => $average]);
    }
    
    public function showStudentArticleDetail(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //student_article_goodsテーブル内を検索
        $check_good = $student_article->student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        
        $reactions = Teacher_reaction::where('student_article_id',$student_article->id)->get();
        
        $check_reaction = false;
        //teacher_reactionsテーブル内を検索
        if(\Auth::guard('teacher')->check()){
            $check_reaction = DB::table('teacher_reactions')
                ->where('student_article_id',$student_article->id)
                ->where('teacher_id',\Auth::guard('teacher')->user()->id)
                ->exists();
        }
        
        
        return view('mypage/teacher/student_article_detail')
        ->with(['student_article' => $student_article,
                'check_good' => $check_good,
                'reactions' => $reactions,
                'check_reaction' => $check_reaction]);
    }
}
