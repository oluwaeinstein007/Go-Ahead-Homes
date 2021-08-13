<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="This is the official website of Go Ahead Homes">
        <meta name="keywords" content="news and activities go ahead homes, accomodations, semi-independent, supported living services, care leavers, care providers,Go Ahead Homes">
        <meta name="author" content="Sanni Q. Lanre">
        <link rel="shortcut icon" href="/svg/home-logo.png" type="image/x-icon">
        <meta property="og:title" content="Go Ahead Homes" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://goaheadhomes.com/news" />
        <meta property="og:image" content="/svg/home-logo.png" />
        <meta property="og:description" content="This is the official news page of Go Ahead Homes" />
        <meta property="og:site_name" content="Go Ahead Homes" />

        <title>Official Go Ahead Homes - News</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="/css/app/.css" rel="stylesheet">
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/7f86e9340c.js"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="/css/app/.css" rel="stylesheet">
        
    </head>
      <body>

      <nav class="navbar navbar-expand-sm navbar-dark bg-dark" text-color="red">
                <div class="container">
                    <a href="{{ url('/') }}" class="navbar-brand">Go Ahead Homes</a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/first') }}">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/testimonials') }}">Testimonials</a>
                        </li>
                        <li class="nav-item activate">
                        <a class="nav-link active" href="{{ url('/news') }}">News</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>


        <h2 class="factors mt-4">Blogs & Activities</h2>

            <div class="first container container-sm mt-3 mb-3 factors">
                <h2><b>{{$post->title}}</b></h2>
                <h6>by <a href="#">{{$post->user->name}}</a> <span>time</span></h6>
                <img src="{{asset($post->picture)}}" alt="" class="first-img">
                <p>{{$post->descrip}}</p>
                
            </div>
     

    
        

                        
           
                    @extends('layouts.footer')

                        @section('content')
    </body>
</html>
