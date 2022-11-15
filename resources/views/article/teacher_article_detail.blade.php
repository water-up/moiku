@extends('layouts.search')

@section('content')
    <h1 class="title">
        {{ $teacher_article->title }}
    </h1>
    <h5 class='content'>
        <p class='status'>ステータス：{{ $teacher_article->status }}</p>
        <p class='place'>場所：{{ $teacher_article->prefecture->name }} {{ $teacher_article->place }}</p>
        <p class='fee'>授業料：{{ $teacher_article->fee }}</p>
        <p class='date'>日程：{{ $teacher_article->date }}</p>
        <p class='teacher'>教え隊：{{ $teacher_article->teacher->name }}</p>
        <p class='body'>コメント：{{ $teacher_article->body }}</p>
    </h5>
    <div class="footer">
        <a href="/article/teacher_article">戻る</a>
    </div>
@endsection
