<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Database\Factories\StudentFactory;

class Student extends User
{
    use HasFactory, Notifiable;
    
    protected static function newFactory()
    {
        return StudentFactory::new(); // ← 対象のFactoryを指定する
    }
    
    
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
    public function secondary_categories()
    {
        return $this->belongsToMany(Secondary_category::class);
    }
    
    public function teacher_articles()
    {
        return $this->belongsToMany(Teacher_article::class);
    }
    
    public function student_articles()
    {
        return $this->hasMany(Student_article::class);
    }
    
    public function student_goods()
    {
        return $this->hasMany(Student_good::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    //ここにリレーションを追加
    
    
    //認証についての設定
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'introducation',
        'icon',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
