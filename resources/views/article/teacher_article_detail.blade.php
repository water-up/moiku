@extends('layouts.search')

@section('content')
    <h1 class="title">
        {{ $teacher_article->title }}
    </h1>
    <h5 class='content'>
        <p class='place'>場所：{{ $teacher_article->prefecture->name }} {{ $teacher_article->place }}</p>
        <p class='fee'>授業料：{{ $teacher_article->fee }}</p>
        <p class='date'>日程：{{ $teacher_article->date }}</p>
        <p class='body'>募集人数：{{ $teacher_article->min_number }} ~ {{ $teacher_article->max_number }} 人</p>
        <p class='teacher'>教え隊：{{ $teacher_article->teacher->name }}</p>
        <p class='body'>コメント：{{ $teacher_article->body }}</p>
    </h5>
    
    <h5 class='goods'>
        <p class='goods'>いいね：{{ $goods }}</p>
        
        @if ($check_good)  <!-- いいね済みの場合 -->
            <input disabled type="submit" value="いいね済み"/>
            
        @else  <!-- いいねしていないの場合 -->
            @if (Auth::guard('student')->check())
                <form action="/article/teacher_article/{{ $teacher_article->id }}/student_good" method="POST">
                    @csrf
                <input type="submit" value="いいねする"/>
            @elseif (Auth::guard('teacher')->check())
                <form action="/article/teacher_article/{{ $teacher_article->id }}/teacher_good" method="POST">
                    @csrf
                <input type="submit" value="いいねする"/>
            @endif
        @endif
    </h5>
    
    <div class="footer">
        <a href="/article/teacher_article">戻る</a>
    </div>
@endsection
