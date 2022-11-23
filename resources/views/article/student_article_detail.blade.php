@extends('layouts.search')

@section('content')
    
    @include('article.temp_student_article')
    
    
    <!-- 立候補ボタン -->
    @if (Auth::guard('teacher')->check() && !$check_reaction)
    <input type="button" onclick="location.href='/article/student_article/{{ $student_article->id }}/reaction'" value="立候補する">
    @endif
    
    @include('article.temp_reaction_list')
    
    <div class="footer">
        <a href="/article/student_article">戻る</a>
    </div>
    @endif
    
@endsection