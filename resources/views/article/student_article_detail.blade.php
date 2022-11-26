@extends('layouts.search')

@section('content')
    
    @include('article.template.student_article')
    
    
    <!-- teacherでログインしている場合 ->> "立候補ボタンを表示" -->
    @if (Auth::guard('teacher')->check() && !$check_reaction)
        @include('article.template.reaction_form')
    @endif
    
    <!-- 立候補者リスト -->
    @include('article.template.reaction_list')
    
    <div class="footer">
        <a href="/article/student_article">戻る</a>
    </div>
    
@endsection