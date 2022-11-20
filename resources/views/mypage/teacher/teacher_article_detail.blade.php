@extends('layouts.navi')

@section('content')

    <!-- teacher_articleの詳細（開始） -->
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
    <!-- teacher_articleの詳細（終了） -->
    
    
    <h5 class='goods'>
        <p class='goods'>いいね：{{ $teacher_article->teacher_article_goods()->count() }}</p>
        
        @if ($check_good)  <!-- いいね済みの場合 -->
            <input disabled type="submit" value="いいね済み"/>
            
        @else  <!-- いいねしていないの場合 -->
            <form action="/mypage/teacher/log/teacher_article/{{ $teacher_article->id }}/good" method="POST">
                @csrf
            <input type="submit" value="いいねする"/>
        @endif
    </h5>
    
    <h3>参加者リスト</h3>
    <h5 class='participants'>
        @foreach ($participants as $participant)
            <div class='participant'>
                <p class='name'>名前：{{ $participant->name }}</p>
            </div>
        @endforeach
    </h5>
    
    <div class="footer">
        <a href="/mypage/teacher/log">戻る</a>
    </div>
@endsection
