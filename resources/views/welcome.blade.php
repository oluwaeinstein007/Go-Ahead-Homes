
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    <body>
    <script>
         $(document).ready(function(){
             $('#exampleModal').modal('show');
         });
    </script>

   <div class="welcome justify-content-center">

   <div class="front">
        <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Covid Protocol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body front">
        <p>This policy outlines how Go Ahead Homes will continue to execute the safe delivery of
our service during this COVID-19 pandemic and what actions will be taken in the event
of an outbreak within our service.
To date, we have not had any confirmed cases of COVID-19 virus amongst service
users, staff or their families, and continue to operate our service with minimal
disruptions as possible in line with governmental guidance. The safety and well-being of
our service users and staff team is extremely paramount during these times and we are
therefore striving above and beyond to try and keep everyone safe from the effects of
COVID-19</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ url('/covid') }}"><button type="button" class="btn btn-primary">Read More</button></a>
      </div>
    </div>
  </div>
</div>

   </div>

   <!--<img src="{{asset('images/Project-Prints.png')}}" class="img-fluid" alt="Responsive image">-->
   <div class="logo">
        <h3>Go Ahead Homes</h3>
        </div>
   
        <div class="welc">
        <h1>WELCOME TO GO AHEAD HOMES</h1>
        <div class="click">
        <a href="{{ url('/first') }}" class="btn btn-one"><button>come in</button></a>
        </div>
        </div>

        

   </div>
        <div class="overlay"></div>







    </body>
</html>
