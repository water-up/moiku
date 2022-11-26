<!-- レビューリスト -->
<h4>レビュー</h4>
<h5 class='article_review'>
    <p class='article_review'>授業評価:{{ $average }} (レビュー数：{{ $reviews->count() }})</p>
</h5>

<h6 class='reviews'>
    @foreach ($reviews as $review)
        <div class='review'>
            <p class='name'>名前：{{ $review->student->name }}</p>
            <p class='score'>評価：{{ $review->score }} /5</p>
            <p class='body'>コメント：{{ $review->body }} </p>
        </div>
    @endforeach
</h6>