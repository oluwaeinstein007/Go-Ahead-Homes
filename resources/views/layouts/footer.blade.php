<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

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
<div id="foot">
<footer>
        <div class="row">
          <div class="col">
            <h3>Social Media <div class="underline"><span></span></div></h3>
            <div class="social">
            <a href="https://www.facebook.com/goaheadhomeslimited/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/goaheadhomes?s=12"> <i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/goaheadhomesltd"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://instagram.com/goaheadhomes?igshid=1j76ux478qc5w"><i class="fab fa-instagram"></i></a>
            
            </div>
              </div>
          <div class="col">
              <h3>OFFICE <div class="underline"><span></span></h3>
              <p><i class="far fa-building"></i>Suite 2 Fountain House, Elm Park, Stanmore, UK</p>
              <p class="email-id"><a href="mailto:{info@goaheadhomes.com}?subject={subject}&body={content}"><i class="far fa-envelope"></i></a>info@goaheadhomes.com</p>
              <p class="email-id"><a href="mailto:{placements@goaheadhomes.com}?subject={subject}&body={content}"><i class="far fa-envelope"></i></a>placements@goaheadhomes.com</p>
             <!-- <h4><a href="tel:{+442034177374}"><i class="fas fa-mobile-alt"></i></a>+44 20 3417 7374</h4> -->
          </div>
          <div class="col">
            <h3>Partners <div class="underline"><span></span></h3>
                              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('/svg/enfield.JPG')}}" class="d-block w-100 slide-img" alt="...">
                      </div>
                      <div class="carousel-item">
                       <img src="{{asset('/svg/sutton.JPG')}}" class="d-block w-100 slide-img" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/svg/barking.JPG')}}" class="d-block w-100 slide-img" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/svg/tower.JPG')}}" class="d-block w-100 slide-img" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/svg/forrest.PNG')}}" class="d-block w-100 slide-img" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright © 2021 Official Go Ahead Homes</p>
        <p class="copyright">Powered by L'Phi-Hub</p>
      </footer> 
</div>
</body>
</html>