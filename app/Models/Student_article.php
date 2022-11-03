<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_article extends Model
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
        return $this->belongsTo('App\Models\Student');
    }
    
    public function prefecture()
    {
        return $this->belongsTo('App\Models\Prefecture');
    }
    
    public function secondary_category()
    {
        return $this->belongsTo('App\Models\Secondary_category');
    }
    
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    public function student_good()
    {
        return $this->hasMany('App\Models\Student_good');
    }
    
    public function teacher_good()
    {
        return $this->hasMany('App\Models\Teacher_good');
    }
    
    public function teacher_reaction()
    {
        return $this->hasMany('App\Models\Teacher_reaction');
    }
    
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher');
    }
    
    public function teacher_article()
    {
        return $this->hasOne('App\Models\Teacher_article');
    }
    
    //ここにリレーションを追加
    
}
