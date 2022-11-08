<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Teacher_articleFactory;

class Teacher_article extends Model
{
    use HasFactory;
    
    protected static function newFactory()
    {
        return Teacher_articleFactory::new(); // ← 対象のFactoryを指定する
    }
    
    /************************************************************
    親テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->belongsTo('App\Models\Aaaa');
    }
    ******************************/
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
    
    public function prefecture()
    {
        return $this->belongsTo('App\Models\Prefecture');
    }
    
    public function student_article()
    {
        return $this->belongsTo('App\Models\Student_article');
    }
    
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }
    
    public function student_teacher_article()
    {
        return $this->hasMany('App\Models\Student_teacher_article');
    }
    
    //ここにリレーションを追加
    
    
}