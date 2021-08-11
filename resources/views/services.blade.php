
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
                <h2>“We’re enthusiastic about what we do, this motivates us to give you services you won’t find elsewhere”</h2>
                </div>
                <br>
        

            <div class="plate container container-sm">
            <div class="factors">
            <h3>ACCOMMODATIONS </h3> <br>
            <img src="/svg/housing.svg" alt=""  class="first-img">
            </div>
            <p>We strive to create a safe, friendly and homely environment to enable our
            young people to feel safe and valued. Our young people have their individual
            rooms and are granted the privacy and independent living facilities they require.
            Following a 6 month period of positive progress young people are encouraged
            and supported to make their personal space reflect their inner selfs. E.g a
            personalised feature wall of their goals, beliefs etc. in their rooms <br>
            All our homes consist of high standard living facilities, good quality furnitures
            with homely soft furnishings, which Include: <br>
            ⁃ Well furnished bedrooms <br>
            ⁃ Fully equipped kitchens <br>
            ⁃ Lounge and dining area <br>
            ⁃ CCTV System <br>
            ⁃ Integrated Intruders alarm system <br>
            ⁃ Front Driveway and rear garden </p>
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
                                <img src="/svg/house.png" class="d-block w-100 slide-img " alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>5, bedroom flat</b></h5>
                                    <p class="carousel-capt">
                                        Address: Lorem ipsum dolor sit. <br>
                                        Desc: Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eveniet eos ad quam eius illo.
                                    </p>
                                    <br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/house.png" class="d-block w-100 slide-img " alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>5, bedroom flat</b></h5>
                                    <p class="carousel-capt">
                                        Address: Lorem ipsum dolor sit. <br>
                                        Desc: Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eveniet eos ad quam eius illo.
                                    </p>
                                    <br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/house.png" class="factors d-block w-100 slide-img " alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>5, bedroom flat</b></h5>
                                    <p class="carousel-capt">
                                        Address: Lorem ipsum dolor sit. <br>
                                        Desc: Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eveniet eos ad quam eius illo.
                                    </p>
                                    <br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/house.png" class="d-block w-100 slide-img factors" alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>5, bedroom flat</b></h5>
                                    <p class="carousel-capt">
                                        Address: Lorem ipsum dolor sit. <br>
                                        Desc: Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eveniet eos ad quam eius illo.
                                    </p>
                                    <br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/house.png" class="d-block w-100 slide-img factors" alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>5, bedroom flat</b></h5>
                                    <p class="carousel-capt">
                                        Address: Lorem ipsum dolor sit. <br>
                                        Desc: Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eveniet eos ad quam eius illo.
                                    </p>
                                    <br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row-2">
                            <div class="block-1 first mb-4 container-md">
                                <img src="/svg/house.png" class="d-block w-100 slide-img factors" alt="...">
                            </div>
                            <div class="block-1 first mb-4  container-md word">
                                    <h5 class="carousel-capt"><b>5, bedroom flat</b></h5>
                                    <p class="carousel-capt">
                                        Address: Lorem ipsum dolor sit. <br>
                                        Desc: Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eveniet eos ad quam eius illo.
                                    </p>
                                    <br><br><br><br><br><br><br><br>
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
                    people’s allocated hours of support and level of needs.</p>
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
                        the young person’s potential. <br>
                        Each residents key worker devises a semi-independent plan which identifies
                        their areas for development. This is continuously monitored to ensure the
                        young person is progressing and the set targets are being met.</p>
                    </div>
                    <div class="block-1 first mb-4 container-md">
                        <h3>Mental health and well being</h3> <br>
                        <img src="/svg/health.svg" alt=""  class="sticker factors">
                        <p>All young people will be registered with the local GP, Dentist and Optician and
                        will be supported by staff to arrange and attend appointments. Keywork
                        sessions will provide young people with information on healthy living, exercise,
                        alcohol and substance misuse, sexual health, general health and personal 
                        hygiene. We also organise self development sessions with professionals such
                        as personal trainers, therapists, volunteers e.t.c who meet our young people’s
                        needs in their areas of expertise.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>

                          
     
                <div class="plate container-sm container">
                <h3>WORK EXPERIENCE AND EMPLOYMENT OPPORTUNITIES FOR YOUNG PEOPLE WHO ARE NEET</h3> <br>
                <div class="factors"><img src="/svg/employ.svg" alt=""  class="first-img"></div>
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
                    <div class="block-1 first mb-4 container-md">
                          <img src="/svg/Project-Prints.png" class="about-img" alt="">      
                    </div>
                    <div class="block-1 first mb-4 container-md">
                        
                        <h3>OUR SERVICE USERS</h3> <br>
                            <p>Young people involved with the youth offending service <br>
                            Unaccompanied Asylum Seeking Children (UASC) <br>
                            Young people at risk of Child Sexual Exploitation (CSE) <br>
                            Young people involved with the youth offending service <br>
                            Unaccompanied Asylum Seeking Children (UASC) <br>
                            Young people at risk of Child Sexual Exploitation (CSE) <br</p>
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>


                <br>




        

     

    
        

                        
           
        

                @extends('layouts.footer')

                @section('content')
        
    </body>
</html>
