@extends('layouts.navi')

@section('content')

    @include('article.template.teacher_article')
    
    
    @if($check_date)
        <!-- まだ授業が行われていない場合 ->> "参加者リストを表示" -->
        @include('article.template.participant_list')
        
    @elseif(!$check_date)
        <!-- 既に授業が行われている場合 ->> "レビューリストを表示" -->
        @include('article.template.review_list')
        
    @endif
    
    <div class="footer">
        <a href="/mypage/teacher/log">戻る</a>
    </div>
@endsection
