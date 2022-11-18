<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Database\Factories\TeacherFactory;

class Teacher extends User
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
    public function secondary_categories()
    {
        return $this->belongsToMany(Secondary_category::class);
    }
    
    public function teacher_articles()
    {
        return $this->hasMany(Teacher_article::class);
    }
    
    public function student_article_goods()
    {
        return $this->hasMany(Studnt_article_good::class);
    }
    
    public function teacher_article_goods()
    {
        return $this->hasMany(Teacher_article_good::class);
    }
    
    public function teacher_reactions()
    {
        return $this->hasMany(Teacher_reaction::class);
    }
    //ここにリレーションを追加
    
    
    
    use HasFactory, Notifiable;
    
    protected static function newFactory()
    {
        return TeacherFactory::new(); // ← 対象のFactoryを指定する
    }
    
    
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
