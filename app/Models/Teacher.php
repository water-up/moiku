<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
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
    public function secondary_category_teacher()
    {
        return $this->hasMany('App\Models\Secondary_category_teacher');
    }
    
    public function teacher_article()
    {
        return $this->hasMany('App\Models\Teacher_article');
    }
    
    public function teacher_good()
    {
        return $this->hasMany('App\Models\Teacher_good');
    }
    
    public function teacher_reaction()
    {
        return $this->hasMany('App\Models\Teacher_reaction');
    }
    //ここにリレーションを追加
    
    
}
