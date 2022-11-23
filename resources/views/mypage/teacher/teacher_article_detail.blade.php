@extends('layouts.navi')

@section('content')

    @include('article.temp_teacher_article')
    
    @include('article.temp_participant_list')
    
    <div class="footer">
        <a href="/mypage/teacher/log">戻る</a>
    </div>
@endsection
