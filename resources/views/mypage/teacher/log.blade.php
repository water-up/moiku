@extends('layouts.navi')

@section('content')

    <h2 align="center">授業管理</h2>
    
    <div class='projecting_articles'>
        <h3 align="center">あなたが教える授業</h3>
        
        @foreach ($projecting_articles as $projecting_article)
            <!-- 募集人数を満たしている投稿 -->
            @if ($projecting_article->students()->count() >= $projecting_article->min_number)
                <div class='filled_article'>
                    <h4 class='title'>
                        <a href="/mypage/teacher/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
                    </h4>
                    <h5 class='content'>
                        <p class='place'>場所：{{ $projecting_article->prefecture->name }} {{ $projecting_article->place }}</p>
                        <p class='fee'>授業料：{{ $projecting_article->fee }} 円</p>
                        <p class='date'>日程：{{ $projecting_article->date }}</p>
                        <p class='body'>募集人数：{{ $projecting_article->min_number }} ~ {{ $projecting_article->max_number }} 人</p>
                        <p class='teacher'>教え隊：{{ $projecting_article->teacher->name }}</p>
                        <p class='body'>コメント：{{ $projecting_article->body }}</p>
                        <p class='goods'>いいね：{{ $projecting_article->teacher_article_goods()->count() }}</p>
                        
                        <p class='info'>
                            現在の参加者：{{ $projecting_article->students()->count() }} 人
                            <mark>開催決定おめでとうございます！</mark>
                        </p>
                    </h5>
                    
                    
                </div>
            @endif
        @endforeach
        
        @foreach ($projecting_articles as $projecting_article)
            <!-- 募集人数を満たしていない投稿 -->
            @if ($projecting_article->students()->count() < $projecting_article->min_number)
                <div class='filled_article'>
                    <h4 class='title'>
                        <a href="/mypage/teacher/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
                    </h4>
                    <h5 class='content'>
                        <p class='place'>場所：{{ $projecting_article->prefecture->name }} {{ $projecting_article->place }}</p>
                        <p class='fee'>授業料：{{ $projecting_article->fee }} 円</p>
                        <p class='date'>日程：{{ $projecting_article->date }}</p>
                        <p class='body'>募集人数：{{ $projecting_article->min_number }} ~ {{ $projecting_article->max_number }} 人</p>
                        <p class='teacher'>教え隊：{{ $projecting_article->teacher->name }}</p>
                        <p class='body'>コメント：{{ $projecting_article->body }}</p>
                        <p class='goods'>いいね：{{ $projecting_article->teacher_article_goods()->count() }}</p>
                        
                        <p class='info'>
                            現在の参加者：{{ $projecting_article->students()->count() }} 人
                            <mark>開催まであと{{ $projecting_article->min_number - $projecting_article->students()->count() }}人</mark>
                        </p>
                    </h5>
                </div>
            @endif
        @endforeach
    </div>
    
    <div class='user_articles'>
        <h3 align="center">あなたが立候補した投稿</h3>
        
        @foreach ($matched_articles as $matched_article)
            <div class='matched_article'>
                <h4 class='title'>
                    <a href="/mypage/teacher/log/student_article/{{ $matched_article->id }}">{{ $matched_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $matched_article->prefecture->name }} {{ $matched_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $matched_article->desered_fee }}</p>
                    <p class='desered_date'>日程：{{ $matched_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $matched_article->body }}</p>
                    <p class='goods'>いいね：{{ $matched_article->student_article_goods()->count() }}</p>
                    
                    <p class='info'><mark>BESTコメントに選ばれました！学び隊募集記事を書いてください。</mark></p>
                </h5>
            </div>
        @endforeach
        
        @foreach ($my_articles as $my_article)
            <div class='my_article'>
                <h4 class='title'>
                    <a href="/mypage/teacher/log/student_article/{{ $my_article->student_article->id }}">{{ $my_article->student_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $my_article->student_article->prefecture->name }} {{ $my_article->student_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $my_article->student_article->desered_fee }}</p>
                    <p class='desered_date'>日程：{{ $my_article->student_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $my_article->student_article->body }}</p>
                    <p class='goods'>いいね：{{ $my_article->student_article->student_article_goods()->count() }}</p>
                    
                    <p class='info'>マッチングをお待ち下さい。</p>
                </h5>
            </div>
        @endforeach
    </div>
    
    <div class='past_articles'>
        <h3 align="center">過去の授業</h3>
        
        @foreach ($past_articles as $past_article)
            <div class='past_article'>
                <h4 class='title'>
                    <a href="/mypage/teacher/log/teacher_article/{{ $past_article->id }}">{{ $past_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $past_article->prefecture->name }} {{ $past_article->place }}</p>
                    <p class='fee'>授業料：{{ $past_article->fee }} 円</p>
                    <p class='date'>日程：{{ $past_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $past_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $past_article->body }}</p>
                    <p class='goods'>いいね：{{ $past_article->teacher_article_goods()->count() }}</p>
                </h5>
            </div>
        @endforeach
    </div>
    
@endsection
