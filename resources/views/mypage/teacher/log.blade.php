@extends('layouts.navi')

@section('content')

    <h2 class="inline-block_test">　>>　授業管理</h2>
    
    <h3>あなたが教える授業</h3>
    <div class='articles'>
        <!-- 募集人数を満たしている投稿 -->
        @foreach ($projecting_articles as $projecting_article)
            @if ($projecting_article->students()->count() >= $projecting_article->min_number)
                <div class='article'>
                    <h4 class="detail_link">
                        <a href="/mypage/teacher/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
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
                        <a href="/mypage/teacher/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
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
    
    <h3>あなたが立候補した投稿</h3>
    <div class='articles'>
        <!-- BESTコメントに選ばれた投稿 -->
        @foreach ($matched_articles as $matched_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/teacher/log/student_article/{{ $matched_article->id }}">{{ $matched_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $matched_article->prefecture->name }} {{ $matched_article->place }}</p>
                    <p>授業料：{{ $matched_article->desered_fee }}</p>
                    <p>日程：{{ $matched_article->desered_date }}</p>
                    <p>コメント：{{ $matched_article->body }}</p>
                    <p>いいね：{{ $matched_article->student_article_goods()->count() }}</p>
                    
                    <p><mark>BESTコメントに選ばれました！学び隊募集記事を書いてください。</mark></p>
                </div>
            </div>
        @endforeach
        
        <!-- 立候補した投稿 -->
        @foreach ($my_articles as $my_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/teacher/log/student_article/{{ $my_article->student_article->id }}">{{ $my_article->student_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $my_article->student_article->prefecture->name }} {{ $my_article->student_article->place }}</p>
                    <p>授業料：{{ $my_article->student_article->desered_fee }}</p>
                    <p>日程：{{ $my_article->student_article->desered_date }}</p>
                    <p>コメント：{{ $my_article->student_article->body }}</p>
                    <p>いいね：{{ $my_article->student_article->student_article_goods()->count() }}</p>
                    
                    <p>マッチングをお待ち下さい。</p>
                </div>
            </div>
        @endforeach
    </div>
    
    <h3>過去の授業</h3>
    <div class='articles'>
        <!-- 過去の投稿 -->
        @foreach ($past_articles as $past_article)
            <div class='article'>
                <h4 class="detail_link">
                    <a href="/mypage/teacher/log/teacher_article/{{ $past_article->id }}">{{ $past_article->title }}</a>
                </h4>
                
                <div class='article_content'>
                    <p>場所：{{ $past_article->prefecture->name }} {{ $past_article->place }}</p>
                    <p>授業料：{{ $past_article->fee }} 円</p>
                    <p>日程：{{ $past_article->date }}</p>
                    <p>教え隊：{{ $past_article->teacher->name }}</p>
                    <p>コメント：{{ $past_article->body }}</p>
                    <p>いいね：{{ $past_article->teacher_article_goods()->count() }}</p>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection
