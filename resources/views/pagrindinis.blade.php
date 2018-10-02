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
            Laravel
        </div>

        <form action="{{ action('AdminUsersController@store') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""></label>
                <input type="" class="form-control" name="">
            </div>
            <input name="_method" type="hidden" value="PUT">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        
    </div>
</div>

@endsection