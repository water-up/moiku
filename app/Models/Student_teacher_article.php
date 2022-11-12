<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Student_teacher_articleFactory;

class Student_teacher_article extends Model
{
    use HasFactory;
    
    protected static function newFactory()
    {
        return Student_teacher_articleFactory::new(); // ← 対象のFactoryを指定する
    }
}
