<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondary_category extends Model
{
    /************************************************************
    親テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->belongsTo('App\Models\Aaaa');
    }
    ******************************/
    public function primary_caregory()
    {
        return $this->belongsTo('App\Models\Primary_caregory');
    }
    
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    public function student_article()
    {
        return $this->hasMany('App\Models\Student_article');
    }
    
    public function secondary_category_student()
    {
        return $this->hasMany('App\Models\Secondary_category_student');
    }
    
    public function secondary_category_teacher()
    {
        return $this->hasMany('App\Models\Secondary_category_teacher');
    }
    
    //ここにリレーションを追加
    
    
}
