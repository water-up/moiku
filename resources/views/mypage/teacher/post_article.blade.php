@extends('layouts.navi')

@section('content')
    
    @if(Request::is('mypage/teacher/log/student_article/*'))
        @include('article.template.student_article')
    @endif
    
    
    <h2 class="inline-block_test">　>>　新規投稿作成</h2>
    
    @if(Request::is('mypage/teacher/log/student_article/*'))
    <form action='/mypage/teacher/log/student_article/{{ $student_article->id }}/post' method="POST">
    @else
    <form action='/mypage/teacher/log/post' method="POST">
    @endif
        
        @csrf
        
        <div class="title">
            <label>
                <h4>タイトル：</h4>
                <input type="text" name="title" value="{{ old('title',@$student_article->title) }}" />
                <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
            </label>
        </div>
        
        <div class="secondary_category_id">
            <label>
                <h4>カテゴリー：</h4>
                <select name="secondary_category_id">
                    @foreach($secondary_categories as $secondary_category)
                        <option value="{{ $secondary_category->id }}" />{{ $secondary_category->name }}
                    @endforeach
                </select>
            </label>
        </div>
        
        <div class="prefecture_id">
            <label>
                <h4>都道府県：</h4>
                <select name="prefecture_id">
                    @foreach($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}" />{{ $prefecture->name }}
                    @endforeach
                </select>
            </label>
        </div>
        
        <div class="place">
            <label>
                <h4>場所：</h4>
                <input type="text" name="place" value="{{ old('place',@$student_article->place) }}" />
                <p class="place__error" style="color:red">{{ $errors->first('place') }}</p>
            </label>
        </div>
        
        <div class="fee">
            <label>
                <h4>授業料：</h4>
                <input type="number" name="fee" value="{{ old('fee') }}" /> 円
                <p class="fee__error" style="color:red">{{ $errors->first('fee') }}</p>
            </label>
        </div>
        
        <div class="date">
            <label>
                <h4>日程：</h4>
                <input type="date" name="date" value="{{ old('date') }}" />
                <p class="date__error" style="color:red">{{ $errors->first('date') }}</p>
            </label>
        </div>
        
        <div class="start_time">
            <label>
                <h4>開始時刻：</h4>
                <input type="time" name="start_time" value="{{ old('start_time') }}" />
                <p class="start_time__error" style="color:red">{{ $errors->first('start_time') }}</p>
            </label>
        </div>
        
        <div class="finish_time">
            <label>
                <h4>開始時刻：</h4>
                <input type="time" name="finish_time" value="{{ old('finish_time') }}" />
                <p class="finish_time__error" style="color:red">{{ $errors->first('finish_time') }}</p>
            </label>
        </div>
        
        <div class="number">
            <label>
                <h4>参加人数：</h4>
                <input type="number" name="min_number" value="{{ old('min_number') }}" />
                ~
                <input type="number" name="max_number" value="{{ old('max_number') }}" />人
                <p class="min_number__error" style="color:red">{{ $errors->first('min_number') }}</p>
                <p class="max_number__error" style="color:red">{{ $errors->first('max_number') }}</p>
            </label>
        </div>
        
        <div class="body">
            <label>
                <h4>コメント：</h4>
                <textarea name="body" placeholder="ここにコメントを記入してください。">{{ old('body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
            </label>
        </div>
        
        
        <input type="submit" value="投稿する"/>
    </form>
    
    @if(Request::is('mypage/teacher/log/student_article/*'))
        <div class="footer">
            <a href="/mypage/teacher/log/student_article/{{ $student_article->id }}">戻る</a>
        </div>
    @else
        <input type="button" onclick="location.href='/mypage/teacher/log'" value="戻る">
    @endif
    
@endsection

