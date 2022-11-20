@extends('layouts.navi')

@section('content')
    
    <!-- student_articleの詳細（開始） -->
    <h1 class="title">
        {{ $student_article->title }}
    </h1>
    <h5 class='content'>
        <p class='place'>場所：{{ $student_article->prefecture->name }} {{ $student_article->place }}</p>
        <p class='desered_fee'>授業料：{{ $student_article->desered_fee }} 円</p>
        <p class='desered_date'>日程：{{ $student_article->desered_date }}</p>
        <p class='body'>コメント：{{ $student_article->body }}</p>
    </h5>
    <!-- student_articleの詳細（終了） -->
    
    
    <h5 class='goods'>
        <p class='goods'>いいね：{{ $student_article->student_article_goods()->count() }}</p>
        
        @if ($check_good)  <!-- いいね済みの場合 -->
            <input disabled type="submit" value="いいね済み"/>
            
        @else  <!-- いいねしていないの場合 -->
            <form action="/mypage/student/log/student_article/{{ $student_article->id }}/good" method="POST">
                @csrf
            <input type="submit" value="いいねする"/>
        @endif
    </h5>
    
    <div class="footer">
        <a href="/mypage/student/log">戻る</a>
    </div>
@endsection
