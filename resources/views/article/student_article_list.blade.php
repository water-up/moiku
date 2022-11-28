@extends('layouts.search')

@section('content')
    
    <div class='student_articles'>
        @foreach ($student_articles as $student_article)
            <div class='student_article'>
                <h4 class='title'>
                    <a href="/article/student_article/{{ $student_article->id }}">{{ $student_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $student_article->prefecture->name }} {{ $student_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $student_article->desered_fee }}</p>
                    <p class='desered_date'>日程：{{ $student_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $student_article->body }}</p>
                </h5>
            </div>
            
            <div class='goods'>
                <p class='goods'>いいね：{{ $student_article->student_article_goods()->count() }}</p>
            </div>
        @endforeach
    </div>
    
    <div class='paginate'>
        {{ $student_articles->links() }}
    </div>
    
@endsection
