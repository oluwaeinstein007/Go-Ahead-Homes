
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="This is the official website of Go Ahead Homes">
        <meta name="keywords" content="contact go ahead homes, accomodations, semi-independent, supported living services, care leavers, care providers,Go Ahead Homes">
        <meta name="author" content="Sanni Q. Lanre">
        <link rel="shortcut icon" href="/svg/home-logo.png" type="image/x-icon">
        <meta property="og:title" content="Go Ahead Homes" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://goaheadhomes.com/contact" />
        <meta property="og:image" content="/svg/home-logo.png" />
        <meta property="og:description" content="This is the official contact page of Go Ahead Homes" />
        <meta property="og:site_name" content="Go Ahead Homes" />

        <title>Official Go Ahead Homes - Contact</title>

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
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/news') }}">News</a>
                        </li>
                        <li class="nav-item activate">
                        <a class="nav-link active" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>

     

        <div class="contact-page">
            <!--
        <section class="location">
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.3869218966934!2d-0.31398988485870294!3d51.61612107965317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876146bd40bb663%3A0x61c616339e8df091!2sFountain%20House!5e0!3m2!1sen!2sng!4v1627587527346!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </section>
            -->

                   <br>


                   <div class="container container-sm first">
                    <form method="post" action="{{ url('/contact') }}" enctype="multipart/form-data">
                                  @csrf
                            
                            <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="John Doe">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="from_mail" placeholder="Enter Your Email">
                            <label for="number">Phone Number</label>
                            <input type="text" class="form-control" name="number" id="number" placeholder="Phone Number">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                            <label for="">Email</label>
                            <textarea type="text" class="form-control" cols="50" rows="7" name="content" id="content" placeholder="Email Content"></textarea>
                            </div>
                    
                            <button class="r btn btn-danger rounded-pill float-right" name="send_email" type="submit">Send Email</button>
                        </form>
                   </div>
                   <br>


                   @extends('layouts.footer')

                    @section('content')

        </div>

    
        

                        
           

      
          
        
        
    </body>
</html>
