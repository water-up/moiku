<!-- student_articleの詳細 -->
<h2 class="inline-block_test">　>>　記事詳細</h2>

<h1 class="title">
    {{ $student_article->title }}
</h1>
<h5 class='content'>
    <p class='place'>場所：{{ $student_article->prefecture->name }} {{ $student_article->place }}</p>
    <p class='desered_fee'>授業料：{{ $student_article->desered_fee }}</p>
    <p class='desered_date'>日程：{{ $student_article->desered_date }}</p>
    <p class='name'>投稿した学び隊：{{ $student_article->student->name }}</p>
    <p class='body'>コメント：{{ $student_article->body }}</p>
</h5>

<!-- いいね機能 -->
<p class='goods'>
    @if ($check_good)  <!-- いいね済みの場合 -->
        <button type="submit" class="btn btn-sm btn-info" disabled>いいね</button>
        
    @else  <!-- いいねしていないの場合 -->
        @if (Auth::guard('student')->check())
            <form action="/student_good/student_article/{{ $student_article->id }}" method="POST">
                @csrf
            <button type="submit" class="btn btn-outline-info btn-sm">いいね</button>
        @elseif (Auth::guard('teacher')->check())
            <form action="/teacher_good/student_article/{{ $student_article->id }}" method="POST">
                @csrf
            <button type="submit" class="btn btn-outline-info btn-sm">いいね</button>
        @else
            いいね
        @endif
    @endif
    
    ：{{ $student_article->student_article_goods()->count() }}
    </form>
</p>
