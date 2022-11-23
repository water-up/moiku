<!-- 参加者リスト -->
<h3>参加者リスト</h3>
<h5 class='participants'>
    @foreach ($participants as $participant)
        <div class='participant'>
            <p class='name'>名前：{{ $participant->name }}</p>
        </div>
    @endforeach
</h5>