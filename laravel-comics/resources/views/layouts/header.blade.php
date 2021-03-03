<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

        
    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="">
                <nav class="nav">
                    <div class="dc_loghi">

                    </div>

                    <div class="container d-flex space-between">
                        <img src="{{asset('img/DC_logo.png')}}" alt="" class="logo_dc">
                        <div class="routes">
                            <ul class="d-flex space-around m-10">
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href="#">CHARACTERS</a></li>
                                <li class="nav-item"><a class="nav-link altezza" aria-current="page" href=" {{ route('comics') }} ">COMICS</a></li>
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
                