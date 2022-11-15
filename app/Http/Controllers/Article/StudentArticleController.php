<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_article;
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
        return view('article/student_article_detail')
        ->with(['student_article' => $student_article]);
    }
}

