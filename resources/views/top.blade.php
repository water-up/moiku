<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Moiku</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/images/android-chrome-192x192.png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
    <link rel="stylesheet" type="text/css" href="css/top.css">
</head>
<body>

    
    
    <header id="header">
        
        <div class="wrapper">
            <div id="slider">
                <h1>あたらしい自分、きっと見つかる。</h1>
                
                
                
                <div class="scrolldown4" id="scroll"><span>Scroll</span></div>
            </div>
        </div>
    </header>
    
    <div id="container">
        <div class="top-brand">
            <img class="shadow-sm" id="top_img" src="/images/icon.png">
            <div>
                <p class="navbar-brand-sub">"集団授業"マッチングサービス</p>
                <p class="brand-name">Moiku</p>
            </div>
            <p class="navbar-brand-sub2">〜「私<span class="emphasis">も行く</span>！」で始まる授業〜</p>
        </div class="top-brand">
        
        
        <div class="top-url">
            <h3>
                <a href="/student/login" class="btn-manabi"><span>学び隊としてログイン</span></a>
                <a href="/teacher/login" class="btn-osie"><span>教え隊としてログイン</span></a>
                <br>
                <a href='/article/teacher_article' class="btnlinestretches5"><span>学び隊募集掲示板をのぞく</span></a>
                <a href='/article/student_article' class="btnlinestretches5"><span>教え隊募集掲示板をのぞく</span></a>
            </h3>
        </div>
    </div> 
    
    
    
    
    



    
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    <!--自作のJS-->
    <script src="js/top.js"></script>
</body>
</html>
