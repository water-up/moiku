@extends('layouts.teacher')

@section('nav')
<h1 align="center">マイページ</h1>

<nav class=side-nav >
    <h5>マイページ目次</h5>
        <ul>
            <li><a href='teacher/mypage/log'>授業管理</a></li>
            <li><a href='teacher/mypage/chat'>チャット</a></li>
            <li><a href='teacher/mypage/profile'>プロフィール</a></li>
            <li><a href='mypage/guide'>Moikuについて</a></li>
        </ul>
    
    <h5>掲示板</h5>
        <ul>
            <li><a href='student/articles'>学び隊掲示板へ</a></li>
            <li><a href='teacher/articles'>教え隊掲示板へ</a></li>
        </ul>
</nav>

@endsection
