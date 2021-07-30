
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
        <section class="location">
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.3869218966934!2d-0.31398988485870294!3d51.61612107965317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876146bd40bb663%3A0x61c616339e8df091!2sFountain%20House!5e0!3m2!1sen!2sng!4v1627587527346!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </section>


                   <br>


                   <div class="container container-sm">
                    <div class="block-1 email">
                    <form method="post" action="" enctype="multipart/form-data">
                                  @csrf
                            
                            <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="from_mail" id="from_mail" placeholder="Enter Your Email">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                            <label for="">Email</label>
                            <textarea type="text" class="form-control" name="content" id="video_descrip" placeholder="Email Content"></textarea>
                            </div>
                    
                            <button class="r btn btn-danger rounded-pill float-right" name="send_email" type="submit">Send Email</button>
                        </form>
                    </div>
<br>
                    <div class="block-1">
                           <h3>Address</h3>
                            <p>Suite 2 Fountain House, Elm Park, Stanmore, United Kingdom</p>
                            <br>
                            <h3>Email</h3>
                            <p>info@goaheadhomes.com</p>
                            <br>
                            <h3>Placement</h3>
                            <p>placements@goaheadhomes.com</p>
                            <h3>Call</h3>
                            <p>+44 20 3417 7374</p>
                    </div>

                   </div>


        </div>

    
        

                        
           
        
        
    </body>
</html>
