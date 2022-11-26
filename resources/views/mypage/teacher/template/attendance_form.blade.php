@if($check_attendance)
    <p class='info'>出席確認済み</p>
    
@elseif(!$check_attendance)
    <p class='info'><mark>出席確認を行なってください</mark></p>
    
    <form action="/mypage/teacher/log/teacher_article/{{ $teacher_article->id }}/review" method="POST">
        @csrf
        <h3>参加者リスト</h3>
        <h5 class='participants'>
            @foreach ($participants as $participant)
                <div class='participant'>
                    <p class='name'>名前：{{ $participant->name }}</p>
                </div>
                
                <div class="attendance">
                    <label>
                        <h4>出欠：</h4>
                        <label><input type="radio" name="attendance" value="{{ old('attendance') }}" />出席</label>
                        <label><input type="radio" name="attendance" value="{{ old('attendance') }}" />欠席</label>
                        
                        <p class="attendance__error" style="color:red">{{ $errors->first('attendance') }}</p>
                    </label>
                </div>
            @endforeach
        </h5>
        
        
        <input type="submit" value="送信する"/>
    </form>
@endif