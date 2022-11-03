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
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    public function teacher_article()
    {
        return $this->hasMany('App\Models\Teacher_article');
    }
    
    public function student_article()
    {
        return $this->hasMany('App\Models\Student_article');
    }
    
    //ここにリレーションを追加
    
    
}
