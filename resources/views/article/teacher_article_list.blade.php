@extends('layouts.search')

@section('content')
    
    <div class='teacher_articles'>
        @foreach ($teacher_articles as $teacher_article)
            <div class='teacher_article'>
                <h4 class='title'>
                    <a href="/article/teacher_article/{{ $teacher_article->id }}">{{ $teacher_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $teacher_article->prefecture->name }} {{ $teacher_article->place }}</p>
                    <p class='fee'>授業料：{{ $teacher_article->fee }}</p>
                    <p class='date'>日程：{{ $teacher_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $teacher_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $teacher_article->body }}</p>
                </h5>
            </div>
            
            <div class='goods'>
                <p class='goods'>いいね：{{ $teacher_article->teacher_article_goods()->count() }}</p>
            </div>
        @endforeach
    </div>
    
    <div class='paginate'>
        {{ $teacher_articles->links() }}
    </div>
    
@endsection
