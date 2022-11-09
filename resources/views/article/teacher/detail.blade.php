@extends('sides.student_mypage')

@section('content')
    <h1 class="title">
        {{ $student_article->title }}
    </h1>
    <div class="content">
        <div class="content__article">
            <h3>本文</h3>
            <p>{{ $student_article->body }}</p>    
        </div>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
@endsection
