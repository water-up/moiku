<?php

namespace App\Http\Controllers\MyPage\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Student_article;
use App\Models\Teacher_article;
use App\Models\Student_article_good;
use App\Models\Teacher_article_good;
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
            Student::find(\Auth::user()->id)->teacher_articles()
            ->where('date','>',new DateTime())
            ->get();
            
            
        //ユーザーの投稿========================================================
        //マッチ選択待ちの投稿
        $not_matched_articles =
            Student::find(\Auth::user()->id)->student_articles()
            ->has('teacher_reactions')
            ->doesntHave('teacher')
            ->doesntHave('teacher_article')
            ->get();
            
        //マッチ選択済みの投稿
        $matched_articles =
            Student::find(\Auth::user()->id)->student_articles()
            ->has('teacher_reactions')
            ->has('teacher')
            ->doesntHave('teacher_article')
            ->get();
            
        //立候補者がいない投稿
        $my_articles =
            Student::find(\Auth::user()->id)->student_articles()
            ->doesntHave('teacher_reactions')
            ->doesntHave('teacher')
            ->doesntHave('teacher_article')
            ->get();
            
            
        //ユーザーの過去の授業==================================================
        //reviewしていない授業
        $not_reviewed_articles =
            Student::find(\Auth::user()->id)->teacher_articles()
            ->where('date','<=',new DateTime())
            ->whereDoesntHave('reviews', function ($query) {
                $query->where('student_id', \Auth::user()->id);})
            ->get();
            
        //reviewした授業
        $reviewed_articles =
            Student::find(\Auth::user()->id)->teacher_articles()
            ->where('date','<=',new DateTime())
            ->whereHas('reviews', function ($query) {
                $query->where('student_id', \Auth::user()->id);})
            ->get();
            
            
        return view('mypage/student/log')
        ->with(['projecting_articles' => $projecting_articles,
                'not_matched_articles' => $not_matched_articles,
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
        if(\Auth::guard('student')->check()){
            $check_good = $teacher_article->teacher_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = $teacher_article->teacher_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        //参加チェック
        $check_join = $teacher_article->students()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        
        //日付チェック
        if($teacher_article->date < new DateTime()){
            $check_date = true;
        }
        else{
            $check_date = false;
        }
        
        //レビューチェック
        $check_review = $teacher_article->reviews()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        
        $reviews = $teacher_article->reviews()->get();
        
        $average = $reviews->avg('score');
        
        
        return view('mypage/student/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article,
                'participants' => $participants,
                'check_good' => $check_good,
                'check_join' => $check_join,
                'check_date' => $check_date,
                'check_review' => $check_review,
                'reviews' => $reviews,
                'average' => $average,]);
    }
    
    public function showStudentArticleDetail(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        $check_good = false;
        
        //student_article_goodsテーブル内を検索
        if(\Auth::guard('student')->check()){
            $check_good = $student_article->student_article_goods()->where('student_id',\Auth::guard('student')->user()->id)->exists();
        }elseif(\Auth::guard('teacher')->check()){
            $check_good = $student_article->student_article_goods()->where('teacher_id',\Auth::guard('teacher')->user()->id)->exists();
        }
        
        $reactions = Teacher_reaction::where('student_article_id',$student_article->id)->get();
        
        
        return view('mypage/student/student_article_detail')
        ->with(['student_article' => $student_article,
                'check_good' => $check_good,
                'reactions' => $reactions]);
    }
}
