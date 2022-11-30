<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
    <link rel="stylesheet" type="text/css" href="css/6-1-4.css">
</head>
<body>

    <div class="wrapper">
        <div id="slider">
            <h1>あたらしい自分、きっと見つかる。</h1>
        </div>
    </div>
    
    <div class="top-url">
        <h3>
            <a href="/student/login">学び隊としてログイン</a>
            <a href="/teacher/login">教え隊としてログイン</a>
            <br><br>
            <a href='/article/teacher_article'>学び隊募集掲示板へ</a>
            <a href='/article/student_article'>教え隊募集掲示板へ</a>
        </h3>
    </div>



    
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    <!--自作のJS-->
    <script src="js/6-1-4.js"></script>
</body>
</html>
