@extends('sides.teacher_mypage')

@section('content')
    
    <h2 align="center">{{ Auth::user()->name }} さんの授業管理画面</h2>
    
    ここに授業一覧
    
@endsection
