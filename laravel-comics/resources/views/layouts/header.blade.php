<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <h4 class="">HOME</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    {{-- <a class="dropdown-item" href="{{ route('admin.home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ADMIN') }}
                                    </a> --}}

                                    <a class="dropdown-item" href="{{ route('admin.home') }}">ADMIN</a>

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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="fascia_blue_nav">
            <div class="container d-flex d_end">
                <a href="#" class="marchio"> <img src="{{asset('img/logo1.svg')}}" alt=""> </a>
                <a href="#" class="marchio"> <img src="{{asset('img/logo2.svg')}}" alt=""> </a>
                <a href="#" class="marchio"> <img src="{{asset('img/logo3.svg')}}" alt=""> </a>
                <a href="#" class="marchio"> <img src="{{asset('img/logo1.svg')}}" alt=""> </a>
                <a href="#" class="marchio"> <img src="{{asset('img/logo2.svg')}}" alt=""> </a>
                <a href="#" class="marchio"> <img src="{{asset('img/logo3.svg')}}" alt=""> </a>
                <a href="#"></a>

            </div>
        </div>
        
        {{-- <nav class="navbar navbar-expand-sm navbar-light bg-light">
            
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('homepage') }}"> Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fumetti.index') }}">Comics</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Comics</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Comics</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav> --}}

        {{-- <div class="">
            @if (Route::has('login'))
                <div class="links">
                    @auth --}}
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                        {{-- <a href="{{ url('/comics') }}">HOME</a> --}}
                    {{-- @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="">
                <nav class="nav">
                    {{-- <div class="dc_loghi">

                    </div> --}}

                    <div class="container d-flex space_between">
                        <img src="{{asset('img/DC_logo.png')}}" alt="" class="logo_dc">
                        <div class="routes">
                            <ul class="d-flex space-around m-10">
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href="#">CHARACTERS</a></li>
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href=" {{ route('fumetti.index') }} ">COMICS</a></li>
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href="#">MOVIES</a></li>
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href="#">TV</a></li>
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href="#">GAMES</a></li>
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href="#">VIDEOS</a></li>
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href="#">CHARACTERS</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle altezza" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        SHOP
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        
                        <div>
                            <form class="d-flex altezza">
                                <input class="no_shadow no_margin search" type="search" placeholder="Search" aria-label="Search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                {{-- <button class="no_shadow no_margin" type="submit">Search</button> --}}
                            </form>
                        </div>
                    </div>
                </nav>