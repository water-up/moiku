@extends('layouts.search')

@section('content')

    @include('article.temp_teacher_article')
    
    @if(\Auth::guard('student')->check() && $check_join)
    <p class='info'>参加済み</p>
    <form action="/article/teacher_article/{{ $teacher_article->id }}/join" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="参加をやめる"/>
    </form>
    
    @elseif(\Auth::guard('student')->check() && !$check_join)
    <p class='info'>参加しますか？</p>
    
    <form action="/article/teacher_article/{{ $teacher_article->id }}/join" method="POST">
        @csrf
        <input type="submit" value="参加する"/>
    </form>
    @endif
    
    @include('article.temp_participant_list')
    
    <div class="footer">
        <a href="/article/teacher_article">戻る</a>
    </div>
@endsection
