
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
                        <li class="nav-item activate">
                        <a class="nav-link active" href="{{ url('/first') }}">Home</a>
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
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>

     



    
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/svg/young.png" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5><b>YOUNG PEOPLE CENTERED CARE</b></h5>
        <p>Our Young people are at the centre of all that we do</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/support.png" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5><b>YOUTH SUPPORT & EMPOWERMENT</b></h5>
        <p>Extensive involvement with Health practitioners, social workers, counsellors, etc ensure our young people are supported fully in all aspects of life </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/rate.jpg" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5><b>FIRST RATE ACCOMODATION</b></h5>
        <p>Our Homely accommodations are of the very best quality in the industry.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/transistion.png" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption d-md-block">
        <h5><b>POSITIVE TRANSITIONS</b></h5>
        <p>All our staff have basic social care qualifications such as DBS certificates, core skills, safeguarding certificate etc.  All to ensure adequate delivery of services to our Young  people.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/babies.jpg" class="d-block w-100 h-75" alt="...">
      <div class="carousel-caption d-md-block">
        <h5><b>HOME FOR YOUNG MOTHERS AND BABIES</b></h5>
        <p>Our all-inclusive-care system accommodates teen mothers and their young </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/youth.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5><b>WELL TRAINED AND QUALIFIED STAFFS</b></h5>
        <p>Out of 5 young people placed with us, 3 get into their College of choice each year.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
