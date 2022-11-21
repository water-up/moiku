<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_reaction extends Model
{
    /************************************************************
    親テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->belongsTo('App\Models\Aaaa');
    }
    ******************************/
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    public function student_article()
    {
        return $this->belongsTo(Student_article::class);
    }
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    //ここにリレーションを追加
    
    
    
    protected $fillable = [
        'teacher_id',
        'student_article_id',
        'min_number',
        'max_number',
        'desered_time',
        'desered_date',
        'body',
    ];
}
