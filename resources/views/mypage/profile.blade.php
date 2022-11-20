@extends('layouts.navi')

@section('content')
    
    <h2 align="center">プロフィール</h2>

    {{-- アイコン画像 --}}
    <div class="icon">
        <label>
            <h4>アイコン画像：</h4>
            @if (Auth::guard('student')->check())
                <img src="/images/student.png" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
            @elseif (Auth::guard('teacher')->check())
                <img src="/images/teacher.png" class="rounded-circle" style="object-fit: cover; width: 200px; height: 200px;">
            @endif
        </label>
    </div>
    
    {{-- ニックネーム --}}
    <div class="name">
        <label>
            <h4>ニックネーム：</h4>
            <p>{{ old('name',$user->name) }}</p>
        </label>
    </div>
    
    {{-- ステータス --}}
    <div class="status">
        <h4>ステータス：</h4>
        @if (Auth::guard('student')->check())
            <p>学び隊</p>
        @elseif (Auth::guard('teacher')->check())
            <p>教え隊</p>
        @endif
    </div>
    
    {{-- カテゴリー --}}
    <div class="category">
        <label>
            @if (Auth::guard('student')->check())
                <h4>興味のあるカテゴリー：</h4>
            @elseif (Auth::guard('teacher')->check())
                <h4>得意なカテゴリー：</h4>
            @endif
            <p>
                @foreach($categories as $category)
                    {{ $category->name }}
                @endforeach
            </p>
        </label>
    </div>
    
    {{-- 自己紹介 --}}
    <div class="introducation">
        <label>
            <h4>自己紹介：</h4>
            <p>{{ old('introducation',$user->introducation) }}</p>
        </label>
    </div>
    
    {{-- メールアドレス --}}
    <div class="email">
        <label>
            <h4>メールアドレス(他ユーザーには公開されません)：</h4>
            <p>{{ $user->email }}</p>
        </label>
    </div>
    
    @if (Auth::guard('student')->check())
    <input type="button" onclick="location.href='/mypage/student/profile/edit'" value="編集する">
    @elseif (Auth::guard('teacher')->check())
    <input type="button" onclick="location.href='/mypage/teacher/profile/edit'" value="編集する">
    @endif
    
@endsection