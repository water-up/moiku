@extends('layouts.navi')

@section('content')

    <h2 align="center">授業管理</h2>
    
    <div class='projecting_articles'>
        <h3 align="center">参加している授業</h3>
        
        @foreach ($projecting_articles as $projecting_article)
            <!-- 募集人数を満たしている投稿 -->
            @if ($projecting_article->students()->count() >= $projecting_article->min_number)
                <div class='filled_article'>
                    <h4 class='title'>
                        <a href="/mypage/student/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
                    </h4>
                    <h5 class='content'>
                        <p class='place'>場所：{{ $projecting_article->prefecture->name }} {{ $projecting_article->place }}</p>
                        <p class='fee'>授業料：{{ $projecting_article->fee }} 円</p>
                        <p class='date'>日程：{{ $projecting_article->date }}</p>
                        <p class='body'>募集人数：{{ $projecting_article->min_number }} ~ {{ $projecting_article->max_number }} 人</p>
                        <p class='teacher'>教え隊：{{ $projecting_article->teacher->name }}</p>
                        <p class='body'>コメント：{{ $projecting_article->body }}</p>
                        
                        <p class='info'>
                            現在の参加者：{{ $projecting_article->students()->count() }} 人
                            <mark>開催決定おめでとうございます！</mark></p>
                    </h5>
                </div>
            @endif
        @endforeach
        
        @foreach ($projecting_articles as $projecting_article)
            <!-- 募集人数を満たしていない投稿 -->
            @if ($projecting_article->students()->count() < $projecting_article->min_number)
                <div class='filled_article'>
                    <h4 class='title'>
                        <a href="/mypage/student/log/teacher_article/{{ $projecting_article->id }}">{{ $projecting_article->title }}</a>
                    </h4>
                    <h5 class='content'>
                        <p class='place'>場所：{{ $projecting_article->prefecture->name }} {{ $projecting_article->place }}</p>
                        <p class='fee'>授業料：{{ $projecting_article->fee }} 円</p>
                        <p class='date'>日程：{{ $projecting_article->date }}</p>
                        <p class='body'>募集人数：{{ $projecting_article->min_number }} ~ {{ $projecting_article->max_number }} 人</p>
                        <p class='teacher'>教え隊：{{ $projecting_article->teacher->name }}</p>
                        <p class='body'>コメント：{{ $projecting_article->body }}</p>
                        
                        <p class='info'>
                        現在の参加者：{{ $projecting_article->students()->count() }} 人
                        <mark>開催まであと{{ $projecting_article->min_number - $projecting_article->students()->count() }}人</mark></p>
                    </h5>
                </div>
            @endif
        @endforeach
    </div>
    
    <div class='user_articles'>
        <h3 align="center">あなたの投稿</h3>
        
        @foreach ($not_matched_articles as $not_matched_article)
            <div class='not_matched_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/student_article/{{ $not_matched_article->id }}">{{ $not_matched_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $not_matched_article->prefecture->name }} {{ $not_matched_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $not_matched_article->desered_fee }} 円</p>
                    <p class='desered_date'>日程：{{ $not_matched_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $not_matched_article->body }}</p>
                    
                    <p class='info'><mark>立候補者が現れました！BESTコメントを選択してください</mark></p>
                </h5>
            </div>
        @endforeach
        
        @foreach ($matched_articles as $matched_article)
            <div class='matched_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/student_article/{{ $matched_article->id }}">{{ $matched_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $matched_article->prefecture->name }} {{ $matched_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $matched_article->desered_fee }} 円</p>
                    <p class='desered_date'>日程：{{ $matched_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $matched_article->body }}</p>
                    
                    <p class='info'>BESTコメント選択済み。教え隊の投稿をお待ちください</p>
                </h5>
            </div>
        @endforeach
        
        @foreach ($my_articles as $my_article)
            <div class='my_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/student_article/{{ $my_article->id }}">{{ $my_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $my_article->prefecture->name }} {{ $my_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $my_article->desered_fee }} 円</p>
                    <p class='desered_date'>日程：{{ $my_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $my_article->body }}</p>
                    
                    <p class='info'>教え隊からのコメントはありません。</p>
                </h5>
            </div>
        @endforeach
    </div>
    
    <div class='not_reviewed_articles'>
        <h3 align="center">過去の授業</h3>
        
        @foreach ($not_reviewed_articles as $not_reviewed_article)
            <div class='not_reviewed_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/teacher_article/{{ $not_reviewed_article->id }}">{{ $not_reviewed_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $not_reviewed_article->prefecture->name }} {{ $not_reviewed_article->place }}</p>
                    <p class='fee'>授業料：{{ $not_reviewed_article->fee }} 円</p>
                    <p class='date'>日程：{{ $not_reviewed_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $not_reviewed_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $not_reviewed_article->body }}</p>
                    
                    <p class='info'><mark>授業評価を行なってください。</mark></p>
                </h5>
            </div>
        @endforeach
        
        @foreach ($reviewed_articles as $reviewed_article)
            <div class='reviewed_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/teacher_article/{{ $reviewed_article->id }}">{{ $reviewed_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='place'>場所：{{ $reviewed_article->prefecture->name }} {{ $reviewed_article->place }}</p>
                    <p class='fee'>授業料：{{ $reviewed_article->fee }} 円</p>
                    <p class='date'>日程：{{ $reviewed_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $reviewed_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $reviewed_article->body }}</p>
                    
                    <p class='info'>授業評価済みです</p>
                </h5>
            </div>
        @endforeach
    </div>
    
@endsection
