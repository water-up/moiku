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
