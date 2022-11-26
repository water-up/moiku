<!-- 参加者リスト -->
<h4>参加者リスト</h4>
<h6 class='participants'>
    @foreach ($participants as $participant)
        <div class='participant'>
            <p class='name'>名前：{{ $participant->name }}</p>
        </div>
    @endforeach
</h6>