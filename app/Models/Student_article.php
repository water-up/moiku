<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\Student_articleFactory;

class Student_article extends Model
{
    use HasFactory;
    
    protected static function newFactory()
    {
        return Student_articleFactory::new(); // ← 対象のFactoryを指定する
    }
    
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
    
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
    public function secondary_category()
    {
        return $this->belongsTo(Secondary_category::class);
    }
    
    //ここにリレーションを追加
    
    
    
    
    
    /************************************************************
    子テーブルとのリレーション
    
    public function aaaaa()
    {
        return $this->hasMany('App\Models\Aaaaa');
    }
    ******************************/
    public function student_article_goods()
    {
        return $this->hasMany(Student_article_good::class);
    }
    
    public function teacher_reactions()
    {
        return $this->hasMany(Teacher_reaction::class);
    }
    
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
    
    public function teacher_article()
    {
        return $this->hasOne(Teacher_article::class);
    }
    
    //ここにリレーションを追加
}
