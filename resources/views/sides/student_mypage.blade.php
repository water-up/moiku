@extends('layouts.student')

@section('nav')
<h1 align="center">マイページ</h1>

<nav class=side-nav >
    <h5>マイページ目次</h5>
        <ul>
            <li><a href='student/mypage/log'>授業管理</a></li>
            <li><a href='student/mypage/chat'>チャット</a></li>
            <li><a href='student/mypage/profile'>プロフィール</a></li>
            <li><a href='mypage/guide'>Moikuについて</a></li>
        </ul>
    
    <h5>掲示板</h5>
        <ul>
            <li><a href='student/articles'>学び隊掲示板へ</a></li>
            <li><a href='teacher/articles'>教え隊掲示板へ</a></li>
        </ul>
</nav>

@endsection
