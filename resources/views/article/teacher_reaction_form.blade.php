@extends('article.student_article_detail')

@section('form')
    
    <div class='teacher_reaction_form'>
        <h3 class="title">立候補入力フォーム</h3>
        <!-- 戻るボタン -->
        <a href="/article/student_article/{{ $student_article->id }}">詳細ページに戻る</a>
        
        
        <form action="/article/student_article/{{ $student_article->id }}/reaction" method="POST">
            @csrf
            
            <div class="min_number">
                <label>
                    <h4>タイトル：</h4>
                    <input type="text" name="min_number" value="{{ old('min_number') }}" />
                    <p class="min_number__error" style="color:red">{{ $errors->first('min_number') }}</p>
                </label>
            </div>
            
            <div class="max_number">
                <label>
                    <h4>最大参加人数：</h4>
                    <input type="text" name="max_number" value="{{ old('max_number') }}" />
                    <p class="max_number__error" style="color:red">{{ $errors->first('max_number') }}</p>
                </label>
            </div>
            
            <div class="desered_time">
                <label>
                    <h4>授業時間：</h4>
                    <input type="text" name="desered_time" value="{{ old('desered_time') }}" />
                    <p class="desered_time__error" style="color:red">{{ $errors->first('desered_time') }}</p>
                </label>
            </div>
            
            <div class="desered_date">
                <label>
                    <h4>希望日程：</h4>
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
            
            <input type="submit" value="送信する"/>
        </form>
        
        
    </div>
    
@endsection
