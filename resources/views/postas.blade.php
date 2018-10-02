@extends('Layouts.main')

@section('turinys')


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <p>{{$post->title}}</p>
        </div>
        <h1>{{$post->body}}</h1>
        
        <form action="{{ action('PostController@update', $post->id) }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Titulinis</label>
                <input type="text" value="{{$post->title}}" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="">Tekstas</label>
                <input type="text" value="{{$post->body}}" class="form-control" name="body">
            </div>
            <input name="_method" type="hidden" value="PUT">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <button type="submit" class="btn btn-default">Redaguoti</button>
        </form>
        
    </div>
</div>

@endsection