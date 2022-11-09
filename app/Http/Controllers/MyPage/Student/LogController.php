<?php

namespace App\Http\Controllers\MyPage\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;
//use App\Models\Teacher_article;

class LogController extends Controller
{
    public function showLog(Student_article $student_article)
    {
        return view('mypage/student/log')
        ->with(['student_articles' => $student_article->where('student_id',\Auth::user()->id)->get()]); 
    }
    
    public function showDetail(Student_article $student_article)
    {
        return view('mypage/student/detail')
        ->with(['student_article' => $student_article]); 
    }
    
}
