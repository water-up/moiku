@extends('layouts.navi')

@section('content')
    
    <div class='articles'>
        @foreach ($teacher_articles as $teacher_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/article/teacher_article/{{ $teacher_article->id }}">{{ $teacher_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $teacher_article->prefecture->name }} {{ $teacher_article->place }}</p>
                    <p>授業料：{{ $teacher_article->fee }}</p>
                    <p>日程：{{ $teacher_article->date }}</p>
                    <p>教え隊：{{ $teacher_article->teacher->name }}</p>
                    <p>コメント：{{ $teacher_article->body }}</p>
                    <p>いいね：{{ $teacher_article->teacher_article_goods()->count() }}</p>
                    <h5>現在の参加者：{{ $teacher_article->students()->count() }} 人</h5>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class='paginate'>
        {{ $teacher_articles->links() }}
    </div>
    
@endsection
