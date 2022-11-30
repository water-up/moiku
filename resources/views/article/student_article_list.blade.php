@extends('layouts.navi')

@section('content')
    
    <div class='articles'>
        <!-- 生徒の投稿 -->
        @foreach ($student_articles as $student_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/article/student_article/{{ $student_article->id }}">{{ $student_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $student_article->prefecture->name }} {{ $student_article->place }}</p>
                    <p>授業料：{{ $student_article->desered_fee }}</p>
                    <p>日程：{{ $student_article->desered_date }}</p>
                    <p>コメント：{{ $student_article->body }}</p>
                    <p class='goods'>いいね：{{ $student_article->student_article_goods()->count() }}</p>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class='paginate'>
        {{ $student_articles->links() }}
    </div>
    
@endsection
