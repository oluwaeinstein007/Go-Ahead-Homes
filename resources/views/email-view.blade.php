
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Go Ahead Homes</title>

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
        <h2 class="factors mt-4">Blogs & Activities</h2>

        @if($enquiry->count())

        @foreach($enquiry as $enquiry)
        <b>Name</b> {{$enquiry['name']}}
        <b>Email</b> {{$enquiry['email']}}
        <b>Phone Number</b> {{$enquiry['number']}}
        <b>Subject</b> {{$enquiry['subject']}}
        <b>Message</b> {{$enquiry['content']}}
                @endforeach



            @else
            <p>There are no posts</p>
            @endif


    
        

                        
           

      
          
        
        
    </body>
</html>
