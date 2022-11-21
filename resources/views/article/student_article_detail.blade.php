@extends('layouts.search')

@section('content')
    
    @include('article.temp_student_article')
    
    <!-- このbladeファイルを継承していくが戻るボタンは、このページでのみ表示 -->
    @if(Request::routeIs('student_article_detail'))
    <div class="footer">
        <a href="/article/student_article">戻る</a>
    </div>
    @endif
    
@endsection