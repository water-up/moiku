@extends('layouts.navi')

@section('content')
    <h1 class="title">
        {{ $student_article->title }}
    </h1>
    <h5 class='content'>
        <p class='place'>場所：{{ $student_article->prefecture->name }} {{ $student_article->place }}</p>
        <p class='desered_fee'>授業料：{{ $student_article->desered_fee }}</p>
        <p class='desered_date'>日程：{{ $student_article->desered_date }}</p>
        <p class='body'>コメント：{{ $student_article->body }}</p>
    </h5>
    <div class="footer">
        <a href="/mypage/student/log">戻る</a>
    </div>
@endsection
