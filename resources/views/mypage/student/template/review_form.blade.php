@if($check_review)
    <p class='info'>授業評価済み</p>
    
@elseif(!$check_review)
    <p class='info'><mark>授業評価を行なってください</mark></p>
    
    <form action="/mypage/student/log/teacher_article/{{ $teacher_article->id }}/review" method="POST">
        @csrf
        
        <div class="score">
            <label>
                <h4>授業評価：</h4>
                <p>不満 <input type="range" name="score" min="0" max="50" value="{{ old('score') }}" /> 満足</p>
                <p class="score__error" style="color:red">{{ $errors->first('score') }}</p>
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
@endif