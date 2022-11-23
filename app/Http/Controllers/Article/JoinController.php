<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Teacher_article;
use App\Models\Student_teacher_article;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTime;

class JoinController extends GoodController
{
    use SoftDeletes;
    
    public function joinClass(Teacher_article $teacher_article)
    {
        $student = Student::find(\Auth::user()->id);
        
        $student->teacher_articles()->attach($teacher_article->id);
        
        return back();
    }
    
    public function cancelClass(Teacher_article $teacher_article)
    {
        $student = Student::find(\Auth::user()->id);
        
        $student->teacher_articles()->detach($teacher_article->id);
        
        return back();
    }
}

