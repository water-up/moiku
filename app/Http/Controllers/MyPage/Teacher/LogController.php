<?php

namespace App\Http\Controllers\MyPage\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;
//use App\Models\Teacher_article;

class LogController extends Controller
{
    public function showLog(Student_article $article)
    {
        return view('student/mypage/log')->with(['articles' => $article->get()]); 
    }
}
