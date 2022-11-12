<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /************************************************************
    親テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->belongsTo('App\Models\Aaaa');
    }
    ******************************/
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    
    public function teacher_article()
    {
        return $this->belongsTo(Teacher_article::class);
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
    
    
}
