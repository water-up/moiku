@extends('layouts.navi')

@section('content')

    <h2>授業管理</h2>
    
    <h3 class='new-post'>
        <a href="/mypage/student/log/post" class="btntransform">新しい投稿を作成する</a>
    </h3>
    
    <h3>　参加している授業</h3>
    <div class='articles'>
        <!-- 募集人数を満たしている投稿 -->
        @foreach ($projecting_articles as $projecting_article)
            @if ($projecting_article->students()->count() >= $projecting_article->min_number)
                <div class='article'>
                    <h4 class="detail_link">
                        <a href="/mypage/student/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
                    </h4>
                    
                    <div class='article_content'>
                        <p>場所：{{ $projecting_article->prefecture->name }} {{ $projecting_article->place }}</p>
                        <p>授業料：{{ $projecting_article->fee }} 円</p>
                        <p>日程：{{ $projecting_article->date }}</p>
                        <p>募集人数：{{ $projecting_article->min_number }} ~ {{ $projecting_article->max_number }} 人</p>
                        <p>教え隊：{{ $projecting_article->teacher->name }}</p>
                        <p>コメント：{{ $projecting_article->body }}</p>
                        <p>いいね：{{ $projecting_article->teacher_article_goods()->count() }}</p>
                        
                        <p>現在の参加者：{{ $projecting_article->students()->count() }} 人<mark>開催決定おめでとうございます！</mark></p>
                    </div>
                </div>
            @endif
        @endforeach
        
        <!-- 募集人数を満たしていない投稿 -->
        @foreach ($projecting_articles as $projecting_article)
            @if ($projecting_article->students()->count() < $projecting_article->min_number)
                <div class='article'>
                    <h4 class="detail_link">
                        <a href="/mypage/student/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
                    </h4>
                    
                    <div class='article_content'>
                        <p>場所：{{ $projecting_article->prefecture->name }} {{ $projecting_article->place }}</p>
                        <p>授業料：{{ $projecting_article->fee }} 円</p>
                        <p>日程：{{ $projecting_article->date }}</p>
                        <p>募集人数：{{ $projecting_article->min_number }} ~ {{ $projecting_article->max_number }} 人</p>
                        <p>教え隊：{{ $projecting_article->teacher->name }}</p>
                        <p>コメント：{{ $projecting_article->body }}</p>
                        <p>いいね：{{ $projecting_article->teacher_article_goods()->count() }}</p>
                        
                        <p>現在の参加者：{{ $projecting_article->students()->count() }} 人<mark>開催まであと{{ $projecting_article->min_number - $projecting_article->students()->count() }}人</mark></p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    
    
    
    <h3>　あなたの投稿</h3>
    <div class='articles'>
        <!-- 立候補者が現れた投稿（BESTコメント選択未だ） -->
        @foreach ($not_matched_articles as $not_matched_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/student/log/student_article/{{ $not_matched_article->id }}">{{ $not_matched_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $not_matched_article->prefecture->name }} {{ $not_matched_article->place }}</p>
                    <p>授業料：{{ $not_matched_article->desered_fee }}</p>
                    <p>日程：{{ $not_matched_article->desered_date }}</p>
                    <p>コメント：{{ $not_matched_article->body }}</p>
                    <p>いいね：{{ $not_matched_article->student_article_goods()->count() }}</p>
                    
                    <p><mark>立候補者が現れました！BESTコメントを選択してください</mark></p>
                </div>
            </div>
        @endforeach
        
        <!-- 立候補者が現れた投稿（BESTコメント選択済み） -->
        @foreach ($matched_articles as $matched_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/student/log/student_article/{{ $matched_article->id }}">{{ $matched_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $matched_article->prefecture->name }} {{ $matched_article->place }}</p>
                    <p>授業料：{{ $matched_article->desered_fee }}</p>
                    <p>日程：{{ $matched_article->desered_date }}</p>
                    <p>コメント：{{ $matched_article->body }}</p>
                    <p>いいね：{{ $matched_article->student_article_goods()->count() }}</p>
                    
                    <p>BESTコメント選択済み。教え隊の投稿をお待ちください</p>
                </div>
            </div>
        @endforeach
        
        <!-- 立候補者がいない投稿 -->
        @foreach ($my_articles as $my_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/student/log/student_article/{{ $my_article->id }}">{{ $my_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>：{{ $my_article->prefecture->name }} {{ $my_article->place }}</p>
                    <p>授業料：{{ $my_article->desered_fee }}</p>
                    <p>日程：{{ $my_article->desered_date }}</p>
                    <p>コメント：{{ $my_article->body }}</p>
                    <p>いいね：{{ $my_article->student_article_goods()->count() }}</p>
                    
                    <p>教え隊からのコメントはありません。</p>
                </div>
            </div>
        @endforeach
    </div>
    
    
    <h3>　過去の授業</h3>
    <div class='articles'>
        <!-- 授業評価を行なっていない投稿 -->
        @foreach ($not_reviewed_articles as $not_reviewed_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/student/log/teacher_article/{{ $not_reviewed_article->id }}">{{ $not_reviewed_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $not_reviewed_article->prefecture->name }} {{ $not_reviewed_article->place }}</p>
                    <p>授業料：{{ $not_reviewed_article->fee }} 円</p>
                    <p>日程：{{ $not_reviewed_article->date }}</p>
                    <p>教え隊：{{ $not_reviewed_article->teacher->name }}</p>
                    <p>コメント：{{ $not_reviewed_article->body }}</p>
                    <p>いいね：{{ $not_reviewed_article->teacher_article_goods()->count() }}</p>
                    
                    <p><mark>授業評価を行なってください。</mark></p>
                </div>
            </div>
        @endforeach
        
        <!-- 授業評価を行なっている投稿 -->
        @foreach ($reviewed_articles as $reviewed_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/student/log/teacher_article/{{ $reviewed_article->id }}">{{ $reviewed_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $reviewed_article->prefecture->name }} {{ $reviewed_article->place }}</p>
                    <p>授業料：{{ $reviewed_article->fee }} 円</p>
                    <p>日程：{{ $reviewed_article->date }}</p>
                    <p>教え隊：{{ $reviewed_article->teacher->name }}</p>
                    <p>コメント：{{ $reviewed_article->body }}</p>
                    <p>いいね：{{ $reviewed_article->teacher_article_goods()->count() }}</p>
                    
                    <p>授業評価済みです</p>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection
