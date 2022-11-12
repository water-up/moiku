<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    /************************************************************
    親テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->belongsTo('App\Models\Aaaa');
    }
    ******************************/
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    public function teacher_articles()
    {
        return $this->hasMany(Teacher_article::class);
    }
    
    public function student_articles()
    {
        return $this->hasMany(Student_article::class);
    }
    
    //ここにリレーションを追加
    
    
}
