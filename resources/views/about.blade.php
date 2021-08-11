
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


        
           <!--
                <div class="first container-sm container mt-4">
                <h3>About Firm</h3>
                <p>Go Ahead Homes is a private organisation dedicated to supporting young care leavers aged 16+ to make a positive transition from residential or foster care into independent living. 
                <br>
                We offer 24/7 supported accommodation to each of our service users which comprise of mixed gender homes, single gender homes and mother and baby homes. 
                <br>
                A sense of belonging and stability is imperative for our young people who are exploring their identities following their different experience of being in care, so we go the extra mile to create a nurturing environment that aids in achieving personal, educational, financial and mental betterment.</p>
            </div>
        

       
        <div class="first container-sm container homes">
            <img src="{{asset('images/Project-Prints.png')}}" class="img-fluid" alt="Responsive image">
            </div>
-->             
                <br>
                <div class="factors container-md container">
                <h2>“Empowering the youth of today to excel in the world of tomorrow”</h2>
                   <br> - EST 2018
                </div>
                <br>

                <div class="row-2">
                    <div class="block-1 first mb-4 container-md move-right">
                            Go Ahead Homes is a private organisation dedicated to supporting young
                        people with low, medium and high level support needs, to make a positive
                        transition from residential or foster care into independent living, with continued
                        outreach support. <br>
                        We offer 24/7 supported 16+ accommodations and 18+ semi independent
                        accommodations to our service users. These comprise of mixed gender, single
                        gender, and mother and baby homes. <br>
                        A sense of belonging and stability is imperative for our young people who are
                        exploring their identities following their different experience of being in care.
                        Hence, our support services are targeted towards achieving personal,
                        educational, financial and mental betterment. <br>
                        
                    </div>
                    <div class="block-1 first mb-4 container-md move-left">
                        <img src="/svg/about4.png" alt=""  class="d-block w-100">
                        <br> 
                    </div>
                </div>


               
                <br>
                <!--
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="/svg/about1.png" class="d-block w-100 about-img" alt="...">
                    <div class="carousel-caption  d-md-block word">
                        <h5><b>YOUNG PEOPLE CENTERED CARE</b></h5>
                        <p>Our Young people are at the centre of all that we do</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                     <img src="/svg/about2.png" class="d-block w-100 about-img" alt="...">
                    <div class="carousel-caption d-md-block word">
                        <h5><b>YOUTH SUPPORT & EMPOWERMENT</b></h5>
                        <p>Extensive involvement with Health practitioners, social workers, counsellors, etc ensure our young people are supported fully in all aspects of life </p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="/svg/about3.png" class="d-block w-100 about-img" alt="...">
                    <div class="carousel-caption d-md-block word">
                        <h5><b>FIRST RATE ACCOMODATION</b></h5>
                        <p>Our Homely accommodations are of the very best quality in the industry.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="/svg/about4.png" class="d-block w-100 about-img" alt="...">
                    <div class="carousel-caption d-md-block word">
                        <h5><b>POSITIVE TRANSITIONS</b></h5>
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
-->
                <br>

                

                <!--check-->
                
                <div class="row-2">
                <div class="block-1 first mb-4 container-md move-left">
                 <h3 class="factors">OUR VISION</h3> 
                  <img src="/svg/vision.svg" alt="" class="sticker">
                <br>
                We envision a society in which all young people from disadvantaged backgrounds are
                empowered to overcome their challenges and strive towards a bright and successful
                future
                </div>
                 
                  <div class="block-1 first mb-4 container-md move-right">
                  <h3 class="factors">OUR TEAM</h3>
                  <img src="/svg/teams.svg" alt=""  class="sticker">
                <br>
                Our team consists of qualified social workers and experienced support staff,
                who have all worked directly with young people within a range of residential
                and outreach settings.
                </div>
                  
                </div>
               
                  <!--end check-->

              
                
                <div class="container-md container appear">
                <div class="factors">
                <h2>Our well trained staff are on hand 24/7 to provide our residents with the support
                and guidance they require. All our staff are experienced in supporting our
                young people to make positive development within the following focus areas: <br></h2>
                </div>
                </div>
                

                <div class="row-2">
                  <div class="block-1 mt-4 first mb-4 container-md roll">
                  
                      Challenging & offending behaviour <br> <br>
                      Sexual   health and identity <br> <br>
                      Emotional health and well being <br> <br>
                      Education, training & Employment <br> <br>
                      Child sexual exploitation <br> <br>
                      Domestic Abuse <br> <br>
                      Alcohol and substance misuse <br> <br>
                      Relationship building and family contact <br> <br>
                      Asylum and Immigration matters <br> <br>
                      Low to medium mental health needs <br> <br>
                      Low Special educational needs. <br> <br>
                  </div>
                  <div class="block-1  first mb-4 container-md twist">
                     <img src="/svg/homes.jpg" class="d-block w-100" alt="...">
                     <br> <br> <br>
                  </div>
                </div>
                <br>
    

     

    
        

                        
           
                @extends('layouts.footer')

                @section('content') 
        
    </body>
</html>
