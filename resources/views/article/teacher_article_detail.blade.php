@extends('layouts.search')

@section('content')

    @include('article.template.teacher_article')
    
    <!-- studentでログインしている場合 ->> "参加確認ボタンを表示" -->
    @if(\Auth::guard('student')->check())
        @include('article.template.join_button')
    @endif
    
    <!-- 参加者リスト -->
    @include('article.template.participant_list')
    
    <div class="footer">
        <a href="/article/teacher_article">戻る</a>
    </div>
@endsection
