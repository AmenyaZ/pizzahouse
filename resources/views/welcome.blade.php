@extends('layouts.layout')
@section('content')
    

<div class="flex-cente position-re full-height">
    @if (Route::has('login'))
         <div class="top-right links">
             @auth
                 <a href=" {{url('/home')}} ">Home</a> 
                 @else
                 <a href=" {{url('login')}} ">Login</a>

                 @if (Route::has('register'))
                     <a href=" {{ route('register') }} ">register</a>
                 @endif
             @endauth
         </div>
    @endif
     <div class="content">
         <div class="title m-b-md">
             Pizza House <br>
             The North's Best Pizzas
         </div>
        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com/"> News </a>
        </div>
    </div>
</div> 
@endsection