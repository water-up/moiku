<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student_article;
use App\Models\Student_article_good;
use App\Models\Teacher_reaction;
use DateTime;

class  ReactionController extends GoodController
{
    public function showReaction(Student_article $student_article)
    {
        //既にいいねしたデータがあるかチェック
        $check_good = $this->checkStudentArticleGood($student_article);
        
        $reactions = Teacher_reaction::where('student_article_id',$student_article->id)->get();
        
        $check_reaction = false;
        //teacher_reactionsテーブル内を検索
        if(\Auth::guard('teacher')->check()){
            $check_reaction = DB::table('teacher_reactions')
                ->where('student_article_id',$student_article->id)
                ->where('teacher_id',\Auth::guard('teacher')->user()->id)
                ->exists();
        }
        
        return view('article/teacher_reaction_form')
        ->with(['student_article' => $student_article,
                'check_good' => $check_good,
                'reactions' => $reactions,
                'check_reaction' => $check_reaction]);
    }
    
    public function postReaction(Request $request,Student_article $student_article)
    {
        $teacher_reaction = new Teacher_reaction;
        $teacher_reaction->teacher_id = \Auth::user()->id;
        $teacher_reaction->student_article_id = $student_article->id;
        $teacher_reaction->fill($request->all())->save();
        
        return redirect('/article/student_article/' . $student_article->id);
    }
    
    
    public function deleteReaction(Student_article $student_article,Teacher_reaction $teacher_reaction)
    {
        $teacher_reaction->delete();
        
        return redirect('/article/student_article/' . $student_article->id);
    }
    
    public function selectMatch(Request $request,Student_article $student_article)
    {
        $student_article->fill($request->all())->save();
        
        return back();
    }
    
    public function resetMatch(Student_article $student_article)
    {
        $student_article->teacher_id = null;
        $student_article->save();
        
        return back();
    }
}

