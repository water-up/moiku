<div class="reaction_title">
    <h3 class="reactions">立候補中の教え隊</h3>
</div>

@foreach($reactions as $reaction)
    <h4 class='name'>{{ $reaction->teacher->name }}</h4>
    
    <p class='num_of_people'>希望人数：{{ $reaction->min_number }} 〜 {{ $reaction->max_number }} 人</p>
    <p class='desered_time'>授業時間：{{ $reaction->desered_time }}</p>
    <p class='desered_date'>希望日：{{ $reaction->desered_date }}</p>
    <p class='body'>コメント：{{ $reaction->body }}</p>
@endforeach