@extends('sides.student_mypage')

@section('content')
    
    <h2 align="center">{{ Auth::user()->name }} さんの授業管理画面</h2>
    
    <div class='articles'>
        @foreach ($articles as $article)
            <div class='article'>
                <h3 class='title'>
                    <a href="/student-articles/{{ $article->id }}">{{ $article->title }}</a>
                </h3>
                <p class='body'>{{ $article->body }}</p>
            </div>
        @endforeach
    </div>
    
@endsection
