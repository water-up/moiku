@extends('layouts.app')

@section('nav')
    @if (Request::is('article/student_article*'))
        <h1 align="center">教え隊募集掲示板</h1>
    @elseif (Request::is('article/teacher_article*'))
        <h1 align="center">学び隊募集掲示板</h1>
    @endif
    
    <nav class=side-nav >
        @if (Auth::guard('student')->check())
            <h5>マイページ目次</h5>
            <ul>
                <li><a href='/mypage/student/log'>授業管理</a></li>
                <li><a href='/mypage/student/chat'>チャット</a></li>
                <li><a href='/mypage/student/profile'>プロフィール</a></li>
                <li><a href='/mypage/student/guide'>Moikuについて</a></li>
            </ul>
        @elseif (Auth::guard('teacher')->check())
            <h5>マイページ目次</h5>
            <ul>
                <li><a href='/mypage/teacher/log'>授業管理</a></li>
                <li><a href='/mypage/teacher/chat'>チャット</a></li>
                <li><a href='/mypage/teacher/profile'>プロフィール</a></li>
                <li><a href='/mypage/teacher/guide'>Moikuについて</a></li>
            </ul>
        @endif
            
        <h5>掲示板</h5>
        <ul>
            <li><a href='/article/teacher_article'>学び隊募集掲示板へ</a></li>
            <li><a href='/article/student_article'>教え隊募集掲示板へ</a></li>
        </ul>
    </nav>

@endsection