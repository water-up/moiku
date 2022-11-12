@extends('sides.student_mypage')

@section('content')

    <h2 align="center">授業管理</h2>
    
    <h3 align="center">参加している授業</h3>
    <div class='scheduled_articles'>
        @foreach ($scheduled_articles as $scheduled_article)
            <div class='scheduled_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/teacher_article/{{ $scheduled_article->id }}">{{ $scheduled_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='status'>ステータス：{{ $scheduled_article->status }}</p>
                    <p class='place'>場所：{{ $scheduled_article->prefecture->name }} {{ $scheduled_article->place }}</p>
                    <p class='fee'>授業料：{{ $scheduled_article->fee }}</p>
                    <p class='date'>日程：{{ $scheduled_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $scheduled_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $scheduled_article->body }}</p>
                    
                    <p class='info'><mark>開催決定おめでとうございます！</mark></p>
                </h5>
            </div>
        @endforeach
    </div>
    
    <div class='not_scheduled_articles'>
        @foreach ($not_scheduled_articles as $not_scheduled_article)
            <div class='not_scheduled_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/teacher_article/{{ $not_scheduled_article->id }}">{{ $not_scheduled_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='status'>ステータス：{{ $not_scheduled_article->status }}</p>
                    <p class='place'>場所：{{ $not_scheduled_article->prefecture->name }} {{ $not_scheduled_article->prefecture->name }} {{ $not_scheduled_article->place }}</p>
                    <p class='fee'>授業料：{{ $not_scheduled_article->fee }}</p>
                    <p class='date'>日程：{{ $not_scheduled_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $not_scheduled_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $not_scheduled_article->body }}</p>
                    
                    <p class='info'><mark>開催まであと○○人</mark></p>
                </h5>
            </div>
        @endforeach
    </div>
    
    <h3 align="center">あなたの投稿</h3>
    <div class='not_matched_articles'>
        @foreach ($not_matched_articles as $not_matched_article)
            <div class='not_matched_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/student_article/{{ $not_matched_article->id }}">{{ $not_matched_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='status'>ステータス：{{ $not_matched_article->status }}</p>
                    <p class='place'>場所：{{ $not_matched_article->prefecture->name }} {{ $not_matched_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $not_matched_article->desered_fee }}</p>
                    <p class='desered_date'>日程：{{ $not_matched_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $not_matched_article->body }}</p>
                    
                    <p class='info'><mark>立候補者が現れました！BESTコメントを選択してください</mark></p>
                </h5>
            </div>
        @endforeach
    </div>
    
    <div class='matched_articles'>
        @foreach ($matched_articles as $matched_article)
            <div class='matched_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/student_article/{{ $matched_article->id }}">{{ $matched_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='status'>ステータス：{{ $matched_article->status }}</p>
                    <p class='place'>場所：{{ $matched_article->prefecture->name }} {{ $matched_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $matched_article->desered_fee }}</p>
                    <p class='desered_date'>日程：{{ $matched_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $matched_article->body }}</p>
                    
                    <p class='info'>BESTコメント選択済み。教え隊の投稿をお待ちください</p>
                </h5>
            </div>
        @endforeach
    </div>
    
    <div class='my_articles'>
        @foreach ($my_articles as $my_article)
            <div class='my_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/student_article/{{ $my_article->id }}">{{ $my_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='status'>ステータス：{{ $my_article->status }}</p>
                    <p class='place'>場所：{{ $my_article->prefecture->name }} {{ $my_article->place }}</p>
                    <p class='desered_fee'>授業料：{{ $my_article->desered_fee }}</p>
                    <p class='desered_date'>日程：{{ $my_article->desered_date }}</p>
                    <p class='body'>コメント：{{ $my_article->body }}</p>
                    
                    <p class='info'>教え隊からのコメントはありません。</p>
                </h5>
            </div>
        @endforeach
    </div>
    
    
    
    <h3 align="center">過去の授業</h3>
    <div class='not_reviewed_articles'>
        @foreach ($not_reviewed_articles as $not_reviewed_article)
            <div class='not_reviewed_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/teacher_article/{{ $not_reviewed_article->id }}">{{ $not_reviewed_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='status'>ステータス：{{ $not_reviewed_article->status }}</p>
                    <p class='place'>場所：{{ $not_reviewed_article->prefecture->name }} {{ $not_reviewed_article->place }}</p>
                    <p class='fee'>授業料：{{ $not_reviewed_article->fee }}</p>
                    <p class='date'>日程：{{ $not_reviewed_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $not_reviewed_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $not_reviewed_article->body }}</p>
                    
                    <p class='info'><mark>授業評価を行なってください。</mark></p>
                </h5>
            </div>
        @endforeach
    </div>
    
    <div class='reviewed_articles'>
        @foreach ($reviewed_articles as $reviewed_article)
            <div class='reviewed_article'>
                <h4 class='title'>
                    <a href="/mypage/student/log/teacher_article/{{ $reviewed_article->id }}">{{ $reviewed_article->title }}</a>
                </h4>
                <h5 class='content'>
                    <p class='status'>ステータス：{{ $reviewed_article->status }}</p>
                    <p class='place'>場所：{{ $reviewed_article->prefecture->name }} {{ $reviewed_article->place }}</p>
                    <p class='fee'>授業料：{{ $reviewed_article->fee }}</p>
                    <p class='date'>日程：{{ $reviewed_article->date }}</p>
                    <p class='teacher'>教え隊：{{ $reviewed_article->teacher->name }}</p>
                    <p class='body'>コメント：{{ $reviewed_article->body }}</p>
                    
                    <p class='info'>授業評価済みです</p>
                </h5>
            </div>
        @endforeach
    </div>
    
@endsection
