@extends('layouts.navi')

@section('content')
    
    @include('article.temp_student_article')
    
    @if(!is_null($student_article->teacher_id))
    <p class='info'>BESTコメント選択済み</p>
    <form action="/article/student_article/{{ $student_article->id }}/reset_match" method="POST">
        @csrf
        @method('PUT')
        <input type="submit" value="BESTコメント解除"/>
    </form>
    
    @elseif(is_null($student_article->teacher_id) && !$reactions->isEmpty()))
    <p class='info'><mark>BESTコメントを選択してください</mark></p>
    
    <form action="/article/student_article/{{ $student_article->id }}/match" method="POST">
        @csrf
        @method('PUT')
        
        <select name="teacher_id">
            @foreach($reactions as $reaction)
                <option value="{{ $reaction->teacher_id }}" />{{ $reaction->teacher->name }}
            @endforeach
        </select>
        
        <input type="submit" value="BESTコメントに決定"/>
    </form>
    @endif
    
    

    @include('article.temp_reaction_list')
        
    <div class="footer">
        <a href="/mypage/student/log">戻る</a>
    </div>
@endsection