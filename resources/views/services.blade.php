
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
        <meta name="keywords" content="services go ahead homes, accomodations, semi-independent, supported living services, care leavers, care providers,Go Ahead Homes">
        <meta name="author" content="Sanni Q. Lanre">
        <link rel="shortcut icon" href="/svg/home-logo.png" type="image/x-icon">
        <meta property="og:title" content="Go Ahead Homes" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://goaheadhomes.com/services" />
        <meta property="og:image" content="/svg/home-logo.png" />
        <meta property="og:description" content="This is the official services page of Go Ahead Homes" />
        <meta property="og:site_name" content="Go Ahead Homes" />

        <title>Official Go Ahead Homes - Services</title>

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
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/first') }}">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item activate">
                        <a class="nav-link active" href="{{ url('/services') }}">Services</a>
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

        <br>
                <div class="factors container-md container">
                <h2>We???re enthusiastic about what we do, this motivates us to give you services you won???t find elsewhere</h2>
                </div>
                <br>
        

            <div class="plate container container-sm">
            <div class="factors">
            <h3>ACCOMMODATIONS </h3> <br>
            <img src="/svg/housing.svg" alt=""  class="sticker">
            </div>
            <p>We strive to create a safe, friendly and homely environment to enable our
            young people feel safe and valued. Our young people have their individual
            rooms and are granted the privacy and independent living facilities they require.
            Following a 6 month period of positive progress, our young people are encouraged
            and supported to make their personal space reflect their inner selfs. For example a
            personalised feature wall of their goals, beliefs and aspirations can be designed in their rooms <br>
            All our homes consist of high standard living facilities, good quality furnitures
            with homely soft furnishings, which Include: <br>
            ??? Well furnished bedrooms <br>
            ??? Fully equipped kitchens <br>
            ??? Lounge and dining area <br>
            ??? CCTV System <br>
            ??? Integrated Intruders alarm system <br>
            ??? Front Driveway and rear garden </p>
            </div>
       


        <br>
        <h2 class="factors">Our Exquisite Accomodations</h2>
        <br>
        

                <!--check-->
                <div id="CaroEx" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaption" data-slide-to="0" class="active"></li>
                    <li data-target="#CaroEx" data-slide-to="1"></li>
                    <li data-target="#CaroEx" data-slide-to="2"></li>
                    <li data-target="#CaroEx" data-slide-to="3"></li>
                    <li data-target="#CaroEx" data-slide-to="4"></li>
                    <li data-target="#CaroEx" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/kimberly.jpg" class="d-block w-100 slide-img " alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>KIMBERLY HOUSE</b></h5>
                                    <p class="carousel-capt">
                                    <b>Address:</b> Waltham Forest, London <br>
                                    <b>Description:</b> 4, bedrooms, 16+ mother and baby accommodation <br>
                                    <b>It???s surroundings:</b> <br>
                                    Tesco express <br>
                                    Sir George Monoux college <br>
                                    Whipps cross hospital <br>
                                    Empire cinemas <br>
                                    Chingford police station 
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/warren.jpg" class="d-block w-100 slide-img " alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>WARREN HOUSE</b></h5>
                                    <p class="carousel-capt">
                                            <b>Address:</b> Waltham Forest, London <br>
                                            <b>Description:</b> 5 bedrooms, 16+ Females only accommodation <br>
                                            <b>It???s surroundings:</b> <br>
                                            Walthamstow market and shopping center <br>
                                            Chingford leisure centre <br>
                                            Larkshall medical centre <br>
                                            Chingford police station <br>
                                            Stratford city 
                                             
                                    </p>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/end.JPG" class="factors d-block w-100 slide-img " alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>Endsleigh House</b></h5>
                                    <p class="carousel-capt">
                                        <b>Address:</b> Redbridge, London  <br>
                                        <b>Description:</b> 6 bedrooms, 18+ Mixed gender accommodation <br>
                                        <b>It???s surroundings:</b> <br>
                                        Sainsbury???s <br>
                                        Abbey leisure centre <br>
                                        Granville medical center <br>
                                        Newham college <br>
                                        Ilford police station <br>
                                    </p>
                                   
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/casitor.JPG" class="d-block w-100 slide-img factors" alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>Caistor House</b></h5>
                                    <p class="carousel-capt">
                                        <b>Address:</b> Newham, London <br>
                                        <b>Description:</b> 4 bedrooms, 18+ Males only accommodation <br>
                                        <b>It???s surroundings:</b> <br>
                                        Westfield superstore <br>
                                        Vue cinema <br>
                                        Stratford police station <br>
                                        University of East London <br>
                                    </p>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/manor.JPG" class="d-block w-100 slide-img factors" alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>Manor House</b></h5>
                                    <p class="carousel-capt">
                                        <b>Address:</b> Newham, London <br>
                                        <b>Description:</b> 4 bedrooms, 18+ Females only accommodation <br>
                                        <b>It???s surroundings:</b> <br>
                                        Sainsbury <br>
                                        Newham academy of music <br>
                                        Stratford police station <br>
                                        Newham university hospital <br>
                                        Manor park rail station <br>
                                    </p>
                                    
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/langdon.jpg" class="d-block w-100 slide-img factors" alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>Langdon House </b></h5>
                                    <p class="carousel-capt">
                                        <b>Address:</b> East Ham, London <br>
                                        <b>Description:</b> 5 bedrooms, 16+ Mixed gender accommodation <br>
                                        <b>It???s surroundings:</b> <br>
                                        Stratford shopping center <br>
                                        Showcase Newham cinema <br>
                                        Stamford college <br>
                                        Newham university hospital <br>
                                        Metropolitan police station
                                    </p>
                                    
                            </div>
                        </div>
                    </div>
                    
                    

                </div>
                <a class="carousel-control-prev" href="#CaroEx" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#CaroEx" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                <!--end check-->
        <br>
        <br>
        <h2 class="factors fall">SUPPORT PLANS</h2>
        <br>
                <div class="plate container container-sm  appear">
                <h3>24/7 staff support</h3> <br>
                    <p>Our service provides 24/7 support, including onsite staff (24hrs
                    accommodation), and out off hours emergency call facility. Support ,advice and
                    guidance can be sought at any time from staff and residents within the
                    organisation . Staffing and support are provided in accordance with the young
                    people???s allocated hours of support and level of needs.</p>
                </div>        
                <br>

                <div class="row-2 rise">
                    <div class="block-1 first mb-4 container-md">
                            <div class="factors">
                            <h3>Keywork sessions</h3> <br>
                            <img src="/svg/keywork.svg" alt=""  class="sticker factors d-block">
                             </div>
                       
                       
                        <p>Our young people are required to participate in regular one on one keywork
                        sessions which are designed to enable meet their health and emotional needs,
                        promote and maintain positive relationships, develop their identity and selfworth, develop interpersonal skills and explore their future career and life
                        prospects. In working towards these objectives, we also work in close
                        partnership with social workers, families and other professionals to maximise
                        the young person???s potential. <br>
                        Each residents key worker devises a semi-independent plan which identifies
                        their areas for development. This is continuously monitored to ensure the
                        young person is progressing and the set targets are being met.</p>
                    </div>
                    <div class="block-1 first mb-4 container-md">
                        <h3 class="factors">Mental health and well being</h3> <br>
                        <img src="/svg/health.svg" alt=""  class="sticker factors">
                        <p>All young people will be registered with the local GP, Dentist and Optician and
                        will be supported by staff to arrange and attend appointments. Keywork
                        sessions will provide young people with information on healthy living, exercise,
                        alcohol and substance misuse, sexual health, general health and personal 
                        hygiene. We also organise self development sessions with professionals such
                        as personal trainers, therapists, volunteers e.t.c who meet our young people???s
                        needs in their areas of expertise.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>

                          
     
                <div class="plate container-sm container ">
                <h3 class="factors">WORK EXPERIENCE AND EMPLOYMENT OPPORTUNITIES FOR YOUNG PEOPLE WHO ARE NEET</h3> <br>
                <div class="factors"><img src="/svg/employ.svg" alt=""  class="sticker"></div>
                <p>In recognising that we all come from different walks of life, Go Ahead Homes is
                dedicated to promoting equal opportunities for our young people that will help
                to shape their futures in a positive and empowering way, irrespective of their
                past experiences <br> <br>
                Our mission is to combat the tremendous rise in young people that are NEET and are
                engaging in criminal and undesirable activities by giving them a sense of belonging
                and purpose. Go ahead homes strive to inspire young minds to achieve
                entrepreneurial success by creating opportunities for them to develop their skills in
                education, employment and networking. <br> <br>
                Therefore we support them to explore other avenues such as training programmes,
                apprenticeships and business workshops by establishing links with local businesses
                and successful entrepreneurs from various sectors (including construction ,carpentry,
                hair, beauty, health , fitness, retail etc) to deliver workshops and provide work experience
                for our young people in various industries in light of developing employment skills and
                promoting further work and career opportunities.</p>
                </div>
                 <br>

                 <div class="row-2">
                    <div class="block-1  mb-4 container-md">
                    <img src="/svg/about4.png" alt=""  class="d-block w-100">     
                    </div>
                    <div class="block-1  mb-4 container-md">
                        
                        <h3>OUR SERVICE USERS</h3> <br> 
                            <p>Young people involved with the youth offending service <br>
                            Unaccompanied Asylum Seeking Children (UASC) <br>
                            Young people at risk of Child Sexual Exploitation (CSE) <br>
                            Young people involved with the youth offending service <br>
                            Unaccompanied Asylum Seeking Children (UASC) <br>
                            Young people at risk of Child Sexual Exploitation (CSE) <br</p>
                            
                    </div>
                </div>


                <br>


               
               <div class="row-3 rise">
                    <div class="block-3 ">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="/svg/servPix4.jpg" alt=""  class="sticker-2 w-100"> 
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/svg/servPix5.jpg" alt=""  class="sticker-2 w-100">
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="block-3 ">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="/svg/servPix1.jpg" alt=""  class="sticker-2 w-100">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/svg/servPix2.png" alt=""  class="sticker-2 w-100">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/svg/servPix3.jpg" alt=""  class="sticker-2 w-100"> 
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="block-3">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="/svg/servPix6.JPG" alt=""  class="sticker-2 w-100"> 
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/svg/servPix7.jpg" alt=""  class="sticker-2 w-100">
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="block-3 ">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="/svg/servPix8.jpg" alt=""  class="sticker-2 w-100">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/svg/servPix9.JPG" alt=""  class="sticker-2 w-100">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/svg/WorkPix.JPG" alt=""  class="sticker-2 w-100">
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
          


                
          

        

     

    
        

                        
           
        

                @extends('layouts.footer')

                @section('content')
        
    </body>
</html>
