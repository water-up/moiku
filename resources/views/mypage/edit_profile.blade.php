@extends('layouts.navi')

@section('content')
    
    <h2 class="inline-block_test">　>>　プロフィール</h2>
    
    @if (Auth::guard('student')->check())
        <form action="/mypage/student/profile/edit" method="POST">
    @elseif (Auth::guard('teacher')->check())
        <form action="/mypage/teacher/profile/edit" method="POST">
    @endif
        @csrf
        @method('PUT')
        
        
        {{-- アイコン画像 --}}
        <div class="icon">
            <label>
                <h4>アイコン画像：</h4>
                {{-- <input type="file" name="icon" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" /> --}}
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
                <input type="text" name="name" value="{{ old('name',$user->name) }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('name') }}</p>
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
                <textarea name="introducation" placeholder="ここに自己紹介を記入してください。">{{ old('introducation',$user->introducation) }}</textarea>
                <p class="introducation__error" style="color:red">{{ $errors->first('introducation') }}</p>
            </label>
        </div>
        
        {{-- メールアドレス --}}
        <div class="email">
            <label>
                <h4>メールアドレス(他ユーザーには公開されません)：</h4>
                <p>{{ $user->email }}</p>
            </label>
        </div>
        
        
        <input type="submit" value="保存する"/>
    </form>
    
    @if (Auth::guard('student')->check())
    <input type="button" onclick="location.href='/mypage/student/profile'" value="戻る">
    @elseif (Auth::guard('teacher')->check())
    <input type="button" onclick="location.href='/mypage/teacher/profile'" value="戻る">
    @endif
    
@endsection