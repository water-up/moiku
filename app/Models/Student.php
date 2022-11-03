<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class Student extends User
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
    public function secondary_category_student()
    {
        return $this->hasMany('App\Models\Secondary_category_student');
    }
    
    public function student_article()
    {
        return $this->hasMany('App\Models\Student_article');
    }
    
    public function student_good()
    {
        return $this->hasMany('App\Models\Student_good');
    }
    
    public function review()
    {
        return $this->hasMany('App\Models\Review');
    }
    
    public function student_teacher_article()
    {
        return $this->hasMany('App\Models\Student_teacher_article');
    }
    
    //ここにリレーションを追加
    
    
    
    //認証についての設定
    use HasFactory, Notifiable;

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
