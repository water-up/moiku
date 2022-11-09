<?php

namespace App\Http\Controllers\Article\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;

class ShowArticleController extends Controller
{
    public function showList(Student_article $article)
    {
        return view('student_articles/log')->with(['articles' => $article->get()]); 
    }
    
    public function showDetail(Student_article $student_article)
    {
        return view('student/article/detail')->with(['student_article' => $student_article]); 
    }
}
