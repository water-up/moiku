<?php

namespace App\Http\Controllers\MyPage\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher_article;
use App\Models\Student_article;
use App\Models\Student;
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
        
        return view('mypage/student/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article,
                'participants' => $participants]);
    }
    
    public function showStudentArticleDetail(Student_article $student_article)
    {
        return view('mypage/student/student_article_detail')
        ->with(['student_article' => $student_article]);
    }
}
