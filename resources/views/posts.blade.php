@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Hello  {{ Auth::user()->name}}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    POST/DELETE a newsletter <br>

                   

                <div class="justify-content-center">
                    <a href="#"></a> <br>
                    <form method="post" action="{{ route('posts') }}" enctype="multipart/form-data">
                         @csrf
                 
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="" placeholder="Input Topic">
                                @error('title')
                                    <div class="error text-small">{{$message}}</div>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="descrip">Full Gist</label>
                            <textarea type="text" class="form-control" cols="50" rows="7" name="descrip" id="descrip" placeholder="Full Gist"></textarea>
                                @error('descrip')
                                    <div class="error text-small">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <select name="section" id="section" class="form-control">
                                <option >Select Section</option>
                                <option value="news">News Update</option>
                                <option value="success">Success Stories</option>
                                <option value="activities">Activity Blog</option>
                                <option value="testify">Testimonials</option>
                            </select>
                                @error('section')
                                    <div>{{$message}}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                                <input type="file" name="picture" id="picture">
                        </div>
                                 <button class="btn btn-outline-success rounded-pill float-right" name="post" type="submit">Upload Post</button>
                </form>
                    
                </div>

                </div>
            </div>

            @if($posts->count())
                @foreach($posts as $post)
                <div class="first container container-sm mt-3 mb-3 factors">
                    <h2><b>{{$post->title}}</b></h2>
                    <h6>by <a href="#">{{$post->user->name}}</a> <span>{{$post->created_at->diffForHumans()}}</span></h6>
                   
                    <img src="{{asset($post->picture)}}" alt="" class="sticker">
                    <p><b> {{$post->descrip}}</b></p>
                

                            <br> <br> <br>

                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger rounded">DELETE</button>
                            </form>
                    </div>

                    
                 @endforeach
                 {{$posts->links()}}
            @else
                <p>There are no posts</p>
            @endif

            


        </div>
    </div>
</div>
@endsection
