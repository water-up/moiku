@extends('sides.student_mypage')

@section('content')
    <h1 class="title">
        {{ $teacher_article->title }}
    </h1>
    <h5 class='content'>
        <p class='place'>地域：{{ $teacher_article->place }}</p>
        <p class='fee'>授業料：{{ $teacher_article->fee }}</p>
        <p class='date'>日程：{{ $teacher_article->date }}</p>
        <p class='teacher'>教え隊：{{ $teacher_article->teacher_id }}</p>
        <p class='body'>コメント：{{ $teacher_article->body }}</p>
    </h5>
    <div class="footer">
        <a href="/mypage/student/log">戻る</a>
    </div>
@endsection