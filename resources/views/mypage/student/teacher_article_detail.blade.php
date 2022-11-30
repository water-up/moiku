@extends('layouts.navi')

@section('content')

    @include('article.template.teacher_article')
    
    @if($check_date)
        <!-- まだ授業が行われていない場合 ->> "参加確認ボタン&参加者リストを表示" -->
        @include('article.template.join_button')
        @include('article.template.participant_list')
        
    @elseif(!$check_date)
        <!-- 既に授業が行われている場合 ->> "授業評価フォーム&レビューリストを表示" -->
        @include('mypage.student.template.review_form')
        @include('article.template.review_list')
        
    @endif
    
    
    
    <div class="footer">
        <a href="/mypage/student/log">戻る</a>
    </div>
@endsection