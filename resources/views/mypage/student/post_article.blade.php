@extends('layouts.navi')

@section('content')
    
    <h2 align="center">新規投稿作成</h2>
    
    <form action="/mypage/student/log/post" method="POST">
        @csrf
        
        <div class="title">
            <label>
                <h4>タイトル：</h4>
                <input type="text" name="title" value="{{ old('title') }}" />
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
                <input type="text" name="place" value="{{ old('place') }}" />
                <p class="place__error" style="color:red">{{ $errors->first('place') }}</p>
            </label>
        </div>
        
        <div class="desered_fee">
            <label>
                <h4>授業料：</h4>
                <input type="text" name="desered_fee" value="{{ old('desered_fee') }}" />
                <p class="desered_fee__error" style="color:red">{{ $errors->first('desered_fee') }}</p>
            </label>
        </div>
        
        <div class="desered_date">
            <label>
                <h4>日程：</h4>
                <input type="text" name="desered_date" value="{{ old('desered_date') }}" />
                <p class="desered_date__error" style="color:red">{{ $errors->first('desered_date') }}</p>
            </label>
        </div>
        
        <div class="body">
            <label>
                <h4>コメント：</h4>
                <textarea name="body" placeholder="ここにコメントを記入してください。">{{ old('body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
            </label>
        </div>
        
        
        <input type="submit" value="保存する"/>
    </form>
    
    <input type="button" onclick="location.href='/mypage/student/log'" value="戻る">
    
@endsection