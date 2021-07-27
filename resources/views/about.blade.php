@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    




                <div class="justify-content-center">
                    <a href="{{ route('posts') }}" class="ml-4 text-sm text-gray-700 underline">POST/DELETE a newsletter</a> <br>
                    <a href="#">POST/DELETE a testimonial</a>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
<body>
    
                 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

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
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
         $(document).ready(function(){
             $('#exampleModal').modal('show');
         })
        </script>
</body>
@endsection
