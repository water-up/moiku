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
        //ユーザーが参加している授業
        $scheduled_articles =
            Student::find(\Auth::user()->id)->teacher_articles()
            ->where('date','>',new DateTime())->where('status','>=',2)      //status>=2は募集人数を満たした授業
            ->get();
        
        $not_scheduled_articles =
            Student::find(\Auth::user()->id)->teacher_articles()
            ->where('date','>',new DateTime())->where('status',1)           //status=1は募集人数を満たしていない授業
            ->get();
        
        //ユーザーの投稿
        $not_matched_articles =
            Student::find(\Auth::user()->id)->student_articles()            //status=1はマッチしていない授業
            ->has('teacher_reactions')->where('status',1)
            ->get();
        
        
        $matched_articles =
            Student::find(\Auth::user()->id)->student_articles()            //status=2はマッチしている授業
            ->where('status',2)
            ->get();
        
        $my_articles =
            Student::find(\Auth::user()->id)->student_articles()
            ->doesntHave('teacher_reactions')->where('status',1)            //status=1はマッチしていない授業
            ->get();
        
        //ユーザーの過去の授業
        $not_reviewed_articles =
            Student::find(\Auth::user()->id)->teacher_articles()
            ->where('date','<=',new DateTime())->where('status','>=',2)     //status>=2は募集人数を満たした授業
            ->whereDoesntHave('reviews', function ($query) {                //reviewしていない授業だけを取得
                $query->where('student_id', \Auth::user()->id);
            })
            ->get();
        
        $reviewed_articles =
            Student::find(\Auth::user()->id)->teacher_articles()
            ->where('date','<=',new DateTime())->where('status','>=',2)     //status>=2は募集人数を満たした授業
            ->whereHas('reviews', function ($query) {                       //reviewした授業だけを取得
                $query->where('student_id', \Auth::user()->id);
            })
            ->get();
        
        
        return view('mypage/student/log')
        ->with(['scheduled_articles' => $scheduled_articles])
        ->with(['not_scheduled_articles' => $not_scheduled_articles])
        ->with(['not_matched_articles' => $not_matched_articles])
        ->with(['matched_articles' => $matched_articles])
        ->with(['my_articles' => $my_articles])
        ->with(['not_reviewed_articles' => $not_reviewed_articles])
        ->with(['reviewed_articles' => $reviewed_articles]);
    }
    
    public function showTeacherArticleDetail(Teacher_article $teacher_article)
    {
        return view('mypage/student/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article]);
    }
    
    public function showStudentArticleDetail(Student_article $student_article)
    {
        return view('mypage/student/student_article_detail')
        ->with(['student_article' => $student_article]);
    }
}
