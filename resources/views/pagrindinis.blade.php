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
            Mankšta
        </div>

        @foreach($posts as $post)
           
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <a href="redaguoti/{{$post->id}}" style="color: green">Redaguoti</a>
            
            <form action="{{ action('PostController@delete', $post->id) }}" method="post" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="DELETE">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <button type="submit" style="color: red" class="btn btn-default">Ištrinti</button>
            </form>
        
        @endforeach
        
        <form action="{{ action('PostController@store') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Titulinis</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="">Tekstas</label>
                <input type="text" class="form-control" name="body">
            </div>
            <input name="_method" type="hidden" value="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <button type="submit" class="btn btn-default">Postinti</button>
        </form>
        
        
        
    </div>
</div>

@endsection