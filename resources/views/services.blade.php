
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


        <div class="services-page pb-5">
            <div class="plate container container-sm mt-3">
                <h4 class="justify-content-center">Our Services</h4>
                <ul>
                    <div class="block-1">
                    <li>Young people involved with the youth offending service</li>
                    <li>Unaccompanied Asylum Seeking Children (UASC)</li>
                    <li>Young people at risk of Child Sexual Exploitation (CSE)</li>
                    </div>
            
                    <div class="block-1">
                    <li>Young people involved with the youth offending service</li>
                    <li>Unaccompanied Asylum Seeking Children (UASC)</li>
                    <li>Young people at risk of Child Sexual Exploitation (CSE)</li>
                    </div>
                </ul>
            </div>
        </div>


        <br>

                    
      <div class="block-1">
      <div class="plate container-sm container">
            <h3>Our Services</h3>
            <p>We strive to create a warm, friendly and homely environment to enable our young people to feel safe and valued. Following a 6 month period of positive progress young people are encouraged and supported to create a personalised feature wall in their rooms.
A sense of belonging and stability is imperative for our young people who are exploring their identities following their different experiences of being in care and so we go the extra mile to create a warm and nurturing environment with high standards of décor, good quality furniture and homely soft furnishings.
Our service provides 24/7 support, including onsite staff (24hrs accommodation), and out off hours emergency call facility. Support , advice and guidance can be sought at any time from staff and residents within the organisation . Staffing and support are provided in accordance with the young people’s allocated hours of support and level of needs.</p>
        </div>


        <br>

        <div class="plate container-sm container">
            <h3>MENTAL HEALTH AND WELL-BEING SUPPORT</h3>
            <p>All young people will be registered with the local GP, Dentist and opticians and will be supported by staff to arrange and attend appointments. Keywork sessions will provide young people with information on healthy living, exercise, alcohol and substance misuse, sexual health, general health and personal hygiene. A personal trainer will be available to undertake group sessions within the placement once a week.</p>
        </div>

      </div>
        <br>

       <div class="block-1">
       <div class="plate container-sm container">
            <h3>WORK EXPERIENCE AND OPPORTUNITIES FOR YOUNG PEOPLE WHO ARE NEET (not in education, employment or training)</h3>
            <p>Staff encourage and support our young people to set and achieve positive goals in education, training and employment. We recognise that young people may experience difficulties within education settings and therefore support them to explore other avenues such as training programmes, apprenticeships and business workshops. Staff will work in partnership with the young person and their support team including social workers or personal advisors to achieve the
outcomes of the personal education plan. Go Ahead Homes have established links with local businesses and successful entrepreneurs from various sectors (including construction and
carpentry, hair and beauty, health and fitness and retail) to deliver workshops and provide work experience for our young people in various industries in light of developing employment skills and promoting further work and career opportunities.</p>
        </div>

        <br>

        <div class="plate container-sm container">
            <h3>All our provisions are monitored by CCTV and include the following</h3>
            <p>
                <ul>
                    <li>24HRS ACCOMMODATION</li>
                    <li>SHARED ACCOMMODATION</li>
                    <li>STAND - ALONE ACCOMMODATION</li>
                    <li>MOTHER AND BABY ACCOMMODATION.</li>
                    <li>YOUTH MENTORING</li>
                </ul>
            </p>
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
