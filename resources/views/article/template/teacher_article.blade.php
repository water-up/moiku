<!-- teacher_articleの詳細（開始） -->
<h2 class="inline-block_test">　>>　記事詳細</h2>

<h1 class="title">
    {{ $teacher_article->title }}
</h1>
<h5 class='content'>
    <p class='place'>場所：{{ $teacher_article->prefecture->name }} {{ $teacher_article->place }}</p>
    <p class='fee'>授業料：{{ $teacher_article->fee }}</p>
    <p class='date'>日程：{{ $teacher_article->date }}</p>
    <p class='body'>募集人数：{{ $teacher_article->min_number }} ~ {{ $teacher_article->max_number }} 人</p>
    <p class='teacher'>教え隊：{{ $teacher_article->teacher->name }}</p>
    <p class='body'>コメント：{{ $teacher_article->body }}</p>
</h5>

<!-- いいね機能 -->
<p class='goods'>
    @if ($check_good)  <!-- いいね済みの場合 -->
        <button type="submit" class="btn btn-sm btn-info" disabled>いいね</button>
        
    @else <!-- いいねしていないの場合 -->
        @if (Auth::guard('student')->check())
            <form action="/student_good/teacher_article/{{ $teacher_article->id }}" method="POST">
                @csrf
            <button type="submit" class="btn btn-outline-info btn-sm">いいね</button>
        @elseif (Auth::guard('teacher')->check())
            <form action="/teacher_good/teacher_article/{{ $teacher_article->id }}" method="POST">
                @csrf
            <button type="submit" class="btn btn-outline-info btn-sm">いいね</button>
        @else
            いいね
        @endif
    @endif
    
    ：{{ $teacher_article->teacher_article_goods()->count() }}
    </form>
</p>