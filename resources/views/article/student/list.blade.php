@extends('sides.student_mypage')

@section('content')
    
    <h2 align="center">教え隊募集掲示板</h2>
    
    <div class='articles'>
        <div class='article'>
            <h3 class='title'>{{ $article->title }}</h3>
            <p class='body'>{{ $article->body }}</p>
        </div>
    </div>
    
@endsection
