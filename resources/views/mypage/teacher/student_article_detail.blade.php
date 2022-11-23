@extends('layouts.navi')

@section('content')
    
    @include('article.temp_student_article')
        
    @include('article.temp_reaction_list')
        
    <div class="footer">
        <a href="/mypage/teacher/log">戻る</a>
    </div>
@endsection