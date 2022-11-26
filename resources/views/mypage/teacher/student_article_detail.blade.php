@extends('layouts.navi')

@section('content')
    
    @include('article.template.student_article')
    
    @if($student_article->teacher_id == Auth::id())
        <p class='info'><mark>BESTコメントに選ばれました！学び隊募集記事を書いてください。</mark></p>
        <input type="button" onclick="location.href='/mypage/teacher/log/student_article/{{ $student_article->id }}/post'" value="記事を書く">
    @endif
    
    
    @include('article.template.reaction_list')
    
    
    <div class="footer">
        <a href="/mypage/teacher/log">戻る</a>
    </div>
@endsection