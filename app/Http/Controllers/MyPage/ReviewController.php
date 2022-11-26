<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Teacher_article;


class ReviewController extends Controller
{
    public function postReview(Request $request,Teacher_article $teacher_article)
    {
        //授業評価の投稿
        $review = new Review;
        $review->student_id = \Auth::user()->id;
        $review->teacher_article_id = $teacher_article->id;
        $request->merge(['score' => ($request->score)/10]);
        $review->fill($request->all())->save();
        
        return back();
    }
}
