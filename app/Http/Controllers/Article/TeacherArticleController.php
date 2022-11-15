<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher_article;
use DateTime;

class TeacherArticleController extends Controller
{
    public function showList()
    {
        $teacher_articles =
            Teacher_article::where('date','>',new DateTime())
            ->get();
            
        return view('article/teacher_article_list')
        ->with(['teacher_articles' => $teacher_articles]);
    }
    
    public function showDetail(Teacher_article $teacher_article)
    {
        return view('article/teacher_article_detail')
        ->with(['teacher_article' => $teacher_article]);
    }
}

