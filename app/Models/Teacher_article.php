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
        return $this->belongsTo(Teacher::class);
    }
    
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
    public function student_article()
    {
        return $this->belongsTo(Student_article::class);
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
    public function teacher_article_goods()
    {
        return $this->hasMany(Teacher_article_good::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    
    //ここにリレーションを追加
    
    
    
    protected $fillable = [
        'teacher_id',
        'secondary_category_id',
        'prefecture_id',
        'title',
        'place',
        'fee',
        'date',
        'start_time',
        'finish_time',
        'min_number',
        'max_number',
        'body'
    ];
    
}