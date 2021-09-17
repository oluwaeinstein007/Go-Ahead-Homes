
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="This is the official website of Go Ahead Homes">
        <meta name="keywords" content="home go ahead homes, accomodations, semi-independent, supported living services, care leavers, care providers,Go Ahead Homes">
        <meta name="author" content="Sanni Q. Lanre">
        <link rel="shortcut icon" href="/svg/home-logo.png" type="image/x-icon">
        <meta property="og:title" content="Go Ahead Homes" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://goaheadhomes.com/first" />
        <meta property="og:image" content="/svg/home-logo.png" />
        <meta property="og:description" content="This is the official home page of Go Ahead Homes" />
        <meta property="og:site_name" content="Go Ahead Homes" />

        <title>Official Go Ahead Homes - Home</title>

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
                <a href="{{ url('/') }}" class="navbar-brand"> <img src="/svg/home-logo.png" alt="" class="logo mr-2"> Go Ahead Homes </a>
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
      <img src="/svg/young.png" class="d-block w-100 rescale-caro" alt="...">
      <div class="carousel-caption  d-md-block word">
        <h5><b>YOUNG PEOPLE CENTERED CARE</b></h5>
        <p>Our Young people are at the centre of all that we do</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/empower.png" class="d-block w-100 rescale-caro" alt="...">
      <div class="carousel-caption d-md-block word caro-sm">
        <h5><b>YOUTH SUPPORT & EMPOWERMENT</b></h5>
        <p>Extensive involvement with Health practitioners, Social workers, Counsellors, etc, ensure our young people are supported fully in all aspects of life </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/rate.png" class="d-block w-100 rescale-caro" alt="...">
      <div class="carousel-caption d-md-block word">
        <h5><b>FIRST RATE ACCOMODATION</b></h5>
        <p>Our Homely accommodations are of the very best quality in the industry.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/transition.png" class="d-block w-100 rescale-caro" alt="...">
      <div class="carousel-caption d-md-block word">
        <h5><b>POSITIVE TRANSITIONS</b></h5>
        <p>Out of 5 young people placed with us, 3 get into their College of choice each year.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/babies.png" class="d-block w-100 rescale-caro" alt="...">
      <div class="carousel-caption d-md-block word">
        <h5><b>HOME FOR YOUNG MOTHERS AND BABIES</b></h5>
        <p>Our all-inclusive-care system accommodates teen mothers and their young </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/svg/trained.png" class="d-block w-100 rescale-caro" alt="...">
      <div class="carousel-caption  d-md-block word caro-sm">
        <h5><b>WELL TRAINED AND QUALIFIED STAFF</b></h5>
        <p>All our staff have basic social care qualifications, such as DBS certificates, core skills, safeguarding certificate etc. All to ensure adequate delivery of services to our Young  people.</p>
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








            


           <!--check-->
           <!--
           <div class="row-2">
                <div class="block-1 first mb-4 container-md">
                 <h3 class="factors">Person centered care</h3> 
                 
                  <img src="/svg/personcent.svg" alt="" class="sticker">
                <br>
                <h6><b>We provide a tailored service approach which target the specific needs of each young person.</b></h6>
                </div>
                 
                  <div class="block-1 first mb-4 container-md">
                  <h3 class="factors">Homely environment</h3>
                  <img src="/svg/homely.svg" alt=""  class="sticker">
                <br>
                <h6><b>We provide a tailored service approach which target the specific needs of each young person.</b></h6>
                </div>
                  
                </div>
              -->
           <!--end check-->


        
                <!-- hey-->


        <div class="container container-sm mt-3 mb-3 factors">
        <h2 class="appear Alegreya"><b>We are an independent care provider who specialise in supported living services and semi-independent accommodation for 16+ care leavers across the UK.</b></h2>
        <a href="{{ url('/about') }}"><button class="btn btn-info rounded">Know More</button></a>
        </div>

        <br>

        <h2 class="factors twist">OUR WOW FACTORS</h2>


<!--Start-->
                <div class="row-2 rise">
                    <div class="block-1 first mb-4 container-md move-left">
                            <div class="factors">
                            <h2><b>Person centered care</b></h2><br>
                            <img src="/svg/personcent.svg" alt=""  class="sticker factors d-block">
                             </div>
                             <h6><b>We provide a tailored service approach, which targets the specific needs of each young person.</b></h6>
                             
                            </div>
                    <div class="block-1 first mb-4 container-md factors move-right">
                    <h2><b>Homely Environment</b></h2> <br>
                        <img src="/svg/homely.svg" alt=""  class="sticker factors">
                        <h6><b>We go the extra mile to make our homes warm, nurturing and well suited to every individuals need.</b></h6>
                        
                    </div>
                </div>

                <div class="row-2 rise">
                    <div class="block-1 first mb-4 container-md move-left">
                            <div class="factors">
                            <h2><b>Character development </b></h2> <br>
                            <img src="/svg/develop.svg" alt=""  class="sticker factors d-block">
                             </div>
                             <h6><b>Every young person leaves our care better than they came in, with an outstanding level of skill set enabling them to live a good quality life of independence</b></h6>
                              <br>  <br>
                            </div>
                    <div class="block-1 first mb-4 container-md factors move-right">
                    <h2><b>Work experience and giving back to the community</b></h2> <br>
                        <img src="/svg/work.svg" alt=""  class="sticker factors">
                        <h6><b>We partner with the best employers in the community where our young people develop work ethics and understand the importance of the community’s needs.</b></h6>
                        
                    </div>
                </div>


<!--End-->
                  

<!--
<div class="row-2 rise">
                    <div class="block-1 first mb-4 container-md move-left">
                            <div class="factors">
                            <h2><b>Person centered care</b></h2> <br>
                            <img src="/svg/personcent.svg" alt=""  class="sticker factors d-block">
                             </div>
                       
                       
                             <h6><b>We provide a tailored service approach, which targets the specific needs of each young person.</b></h6>
                    </div>
                    <div class="block-1  mb-4 container-md">
                        
                        <img src="/svg/personCen.JPG" alt=""  class="sticker container-md factors d-block">
                    </div>
          </div>

          <div class="row-2 rise">
                    <div class="block-1 mb-4 container-md move-right">
                    <img src="/svg/HomePix.JPG" alt=""  class="sticker container-md factors d-block ">
                    </div>
                    <div class="block-1 first mb-4 container-md">
                    <div class="factors">
                            <h2><b>Homely environment</b></h2> 
                            <img src="/svg/homely.svg" alt=""  class="sticker  factors d-block">
                             </div>
                             <h6><b>We go the extra mile to make our homes warm, nurturing and well suited to every individuals need.</b></h6>
                    </div>
          </div>

          <div class="row-2 rise">
                    <div class="block-1 first mb-4 container-md move-left">
                            <div class="factors">
                            <h2><b>Character development </b></h2> <br>
                            <img src="/svg/develop.svg" alt="" class="sticker factors d-block">
                             </div>
                             
                             <h6><b>Every young person leaves our care better than they came in, with an outstanding level of skill set enabling them to live a good quality life of independence</b></h6>
                    </div>
                    <div class="block-1  mb-4 container-md">
                        
                        <img src="/svg/GrowPix.JPG" alt=""  class="sticker container-md factors d-block">
                    </div>
          </div>

          <div class="row-2 rise">
                    <div class="block-1 mb-4 container-md move-right">
                    <img src="/svg/WorkPix.JPG" alt=""  class="sticker container-md factors d-block ">
                    </div>
                    <div class="block-1 first mb-4 container-md">
                    <div class="factors">
                            <h2><b>Work experience and giving back to the community</b></h2>
                            <img src="/svg/work.svg" alt=""  class="sticker  factors d-block">
                             </div>
                        <h6><b>We partner with the best employers in the community where our young people develop work ethics and understand the importance of the community’s needs.</b></h6>
                    </div>
          </div>
-->


      <!--
        <div class="first container container-sm mt-3 mb-3 factors move-left">
        <h2><b>Person centered care</b></h2>
        <img src="/svg/personcent.svg" alt="" class="sticker">
        <h6><b>We provide a tailored service approach, which targets the specific needs of each young person.</b></h6>
        </div>
-->
        

  <div class=" bill  mt-3 mb-3 factors">
        <h2 class="roll"><b>Tested and Trusted by Local authorities across London</b></h2>
        </div>

       
        <h2 class="factors appear">Don’t miss out on our service!</h2>
        

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="plate container container-sm mt-3 mb-3 factors">
      <h5><b>"Go ahead homes provide competitive rates with exceptional services."</b></h5>
        <h6>Placement team of Barking and Dagenham</h6>
        <a href="{{ url('/testimonials') }}"><button class="btn btn-info rounded btn-sm">See More</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <div class="plate container container-sm mt-3 mb-3 factors">
        <h5><b>"I’m so blessed to be living here, I’ve never met a management so intentional about everything that concerns me and my child. I will follow all rules to ensure we stay here, where we are happy"</b></h5>
        <h6>- A young mother</h6>
        <a href="{{ url('/testimonials') }}"><button class="btn btn-info rounded btn-sm">See More</button></a>
      </div>
    </div>
    <div class="carousel-item">
    <div class="plate container container-sm mt-3 mb-3 factors">
        <h5><b>"It’s great to see how the Go Ahead Homes staff engage the young people in weekly activities. It definitely promotes a sense of belonging in every individual."</b></h5>
        <h6>- Social worker</h6>
        <a href="{{ url('/testimonials') }}"><button class="btn btn-info rounded btn-sm">See More</button></a>
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




      


@extends('layouts.footer')

@section('content')
        
    </body>
</html>
