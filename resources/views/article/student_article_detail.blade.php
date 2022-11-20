@extends('layouts.search')

@section('content')
    
    <!-- student_articleの詳細（開始） -->
    <h1 class="title">
        {{ $student_article->title }}
    </h1>
    <h5 class='content'>
        <p class='place'>場所：{{ $student_article->prefecture->name }} {{ $student_article->place }}</p>
        <p class='desered_fee'>授業料：{{ $student_article->desered_fee }}</p>
        <p class='desered_date'>日程：{{ $student_article->desered_date }}</p>
        <p class='body'>コメント：{{ $student_article->body }}</p>
    </h5>
    
    <h5 class='goods'>
        <p class='goods'>いいね：{{ $student_article->student_article_goods()->count() }}</p>
        
        @if ($check_good)  <!-- いいね済みの場合 -->
            <input disabled type="submit" value="いいね済み"/>
            
        @else  <!-- いいねしていないの場合 -->
            @if (Auth::guard('student')->check())
                <form action="/article/student_article/{{ $student_article->id }}/student_good" method="POST">
                    @csrf
                <input type="submit" value="いいねする"/>
            @elseif (Auth::guard('teacher')->check())
                <form action="/article/student_article/{{ $student_article->id }}/teacher_good" method="POST">
                    @csrf
                <input type="submit" value="いいねする"/>
            @endif
        @endif
    </h5>
    <!-- student_articleの詳細（終了） -->
    
    
    <div class="footer">
        <a href="/article/student_article">戻る</a>
    </div>
@endsection