@extends('layouts.app')

@section('nav')

    
    
    
<div id="container">
    
    
    <header class="shadow" id="header">
        <nav>
            <ul>
                <h2 class="nav_title">Moiku</h2>
                
                @if (Auth::guard('student')->check())
                <li class="side-li"><a href="{{ url('student/home') }}">Top</a></li>
                @elseif (Auth::guard('teacher')->check())
                <li class="side-li"><a href="{{ url('teacher/home') }}">Top</a></li>
                @endif
                
                @if (Auth::guard('student')->check())
                <li class="has-child"><a href="#">MyPage</a><!--子要素を持つ li にはhas-childというクラス名をつける-->
                    <ul class="side-mypage">
                        <li class="side-mypage"><a href='/mypage/student/log'>授業管理</a></li>
                        <li class="side-mypage"><a href='/mypage/student/profile'>プロフィール</a></li>
                        <li class="side-mypage"><a href='/mypage/student/chat'>チャット</a></li>
                    </ul>
                </li>
                @elseif (Auth::guard('teacher')->check())
                <li class="has-child"><a href="#">MyPage</a><!--子要素を持つ li にはhas-childというクラス名をつける-->
                    <ul class="side-mypage">
                        <li class="side-mypage"><a href='/mypage/teacher/log'>授業管理</a></li>
                        <li class="side-mypage"><a href='/mypage/teacher/profile'>プロフィール</a></li>
                        <li class="side-mypage"><a href='/mypage/teacher/chat'>チャット</a></li>
                    </ul>
                </li>
                @endif
                
                <li class="has-child"><a href="#">掲示板</a>
                    <ul>
                        <li class="side-teacher-article"><a href='/article/teacher_article'>学び隊募集掲示板へ</a></li>
                        <li class="side-student-article"><a href='/article/student_article'>教え隊募集掲示板へ</a></li>
                    </ul>
                </li>
                
                <li class="side-li"><a href='/guide'>Moikuについて</a></li>
            </ul>
        </nav>
        
    </header>
    
    
    
    
    <main id="main-area">
        
        @if(Request::is('mypage/*'))
            <h2 class="inline-block_test">{{ Auth::user()->name }} さんのMyPage</h2>
            
        @elseif (Request::is('article/student_article*'))
            <h2 class="inline-block_test">教え隊募集掲示板</h2>
            
        @elseif (Request::is('article/teacher_article*'))
            <h2 class="inline-block_test">学び隊募集掲示板</h2>
        @endif
        
        
        @yield('content')
        
    </main>
    
</div>

@endsection
