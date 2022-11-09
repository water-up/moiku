@extends('sides.student_mypage')

@section('content')
    
    <h2 align="center">{{ Auth::user()->name }} さんの授業管理画面</h2>
    
    <div class='student_articles'>
        @foreach ($student_articles as $student_article)
            <div class='student_article'>
                <h3 class='title'>
                    <a href="/mypage/student/log/{{ $student_article->id }}">{{ $student_article->title }}</a>
                </h3>
                <p class='body'>{{ $student_article->body }}</p>
            </div>
        @endforeach
    </div>
    
@endsection
