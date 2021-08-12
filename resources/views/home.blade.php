@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello  {{ Auth::user()->name}}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                <div class="justify-content-center">
                    <a href="{{ route('posts') }}" class="ml-4 text-sm text-gray-700 ">POST/DELETE a Newsletter/Testimonial</a> <br>
                    
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
