<?php

namespace App\Http\Controllers\MyPage\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Student_article;
use App\Models\Prefecture;
use App\Models\Secondary_category;


class PostController extends Controller
{
    public function showPostArticle()
    {
        $secondary_categories = Secondary_category::get();
        $prefectures = Prefecture::get();
        
        return view('mypage/student/post_article')
        ->with(['prefectures' => $prefectures,
                'secondary_categories' => $secondary_categories]);
    }
    
    public function postArticle(Request $request)
    {
        $student_article = new Student_article;
        $student_article->student_id = \Auth::user()->id;
        $student_article->fill($request->all())->save();
        
        return redirect('/mypage/student/log/student_article/' . $student_article->id);
    }
}
