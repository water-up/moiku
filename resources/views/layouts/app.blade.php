<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Moiku</title>
    <link rel="icon" href="favicon.ico">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
    <link rel="stylesheet" type="text/css" href="/css/list.css">
</head>
<body>
    <div class="container-body">
    
        <div class="header-bar" id="app">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <img class="shadow-sm" id="header_img" src="/images/icon.png">
                    
                    <div>
                    <p class="navbar-brand-sub">"集団授業"マッチングサービス</p>
                    @if (Auth::guard('student')->check())
                        <a class="navbar-brand" href="{{ url('/mypage/student/log') }}">
                                Moiku
                        </a>
                    @elseif (Auth::guard('teacher')->check())
                        <a class="navbar-brand" href="{{ url('/mypage/teacher/log') }}">
                                Moiku
                        </a>
                    @else
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Moiku
                        </a>
                    @endif
                    </div>
                    
                    <p class="navbar-brand-sub2">〜「私<span class="emphasis">も行く</span>！」で始まる授業〜</p>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @if (Auth::guard('student')->check())
                                <li class="nav-item dropdown">
                                    <p>学び隊でログイン中</p>
                                    
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::guard('student')->user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href='/mypage/student/log' >
                                            マイページへ
                                        </a>
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @elseif (Auth::guard('teacher')->check())
                                <li class="nav-item dropdown">
                                    <p>教え隊でログイン中</p>
                                    
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::guard('teacher')->user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href='/mypage/teacher/log' >
                                            マイページへ
                                        </a>
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @elseif (auth()->guest())
                                @if (Request::is('article/teacher_article*') || Request::is('student/*'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('student/login') }}">{{ __('Login') }}</a>
                                        <a class="nav-link" href="{{ url('student/register') }}">{{ __('Register') }}</a>
                                    </li>
                                @elseif (Request::is('article/student_article*') || Request::is('teacher/*'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('teacher/login') }}">{{ __('Login') }}</a>
                                        <a class="nav-link" href="{{ url('teacher/register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <div id=header-space></div>
        
    
        @yield('login-form')
        
        
        @yield('nav')
        
        <footer id="footer">
            <small>
                &copy; 2023 Moiku .<br>
                24卒　就活ポートフォリオ用
            </small>  
        </footer>
        
    </div>
    
</body>
</html>
