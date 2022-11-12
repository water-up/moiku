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
        return $this->belongsTo(Primary_caregory::class);
    }
    
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    public function student_articles()
    {
        return $this->hasMany(Student_article::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
    
    //ここにリレーションを追加
    
    
}
