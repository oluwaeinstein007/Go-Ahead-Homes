
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
                        <li class="nav-item activate">
                        <a class="nav-link active" href="{{ url('/about') }}">About</a>
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
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>


        <div class="block-1">
            <div class="container-sm container mt-4">
                <h3>About Firm</h3>
                <p>Go Ahead Homes is a private organisation dedicated to supporting young care leavers aged 16+ to make a positive transition from residential or foster care into independent living. 
                <br>
                We offer 24/7 supported accommodation to each of our service users which comprise of mixed gender homes, single gender homes and mother and baby homes. 
                <br>
                A sense of belonging and stability is imperative for our young people who are exploring their identities following their different experience of being in care, so we go the extra mile to create a nurturing environment that aids in achieving personal, educational, financial and mental betterment.</p>
            </div>
        </div>

        <div class="block-1">
        <div class="container-sm container homes">
            <img src="{{asset('images/Project-Prints.png')}}" class="img-fluid" alt="Responsive image">
            </div>
        </div>

     

    
        

                        
           
        <footer>
        <div class="row">
          <div class="col">
            <h3>Social Media <div class="underline"><span></span></div></h3>
            <div class="social">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-instagram"></i>
            </div>
              </div>
          <div class="col">
              <h3>OFFICE <div class="underline"><span></span></h3>
              <p><i class="far fa-building"></i>Suite 2 Fountain House, Elm Park, Stanmore, UK</p>
              <p class="email-id"><i class="far fa-envelope"></i>info@goaheadhomes.com</p>
              <p class="email-id"><i class="far fa-envelope"></i>placements@goaheadhomes.com</p>
              <h4><i class="fas fa-mobile-alt"></i>+44 20 3417 7374</h4>
          </div>
          <div class="col">
            <h3>Partners <div class="underline"><span></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere molestiae soluta, impedit ut, commodi non eveniet, eligendi placeat quam voluptatibus tempore beatae! Nesciunt saepe est laborum facilis, in atque temporibus.</p>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright © 2021 Official Go Ahead Homes</p>
        <p class="copyright">Powered by L'Phi-Hub</p>
      </footer> 
        
    </body>
</html>
