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
         <img src="/img/pizza-house.png">
         <div class="title m-b-md">
             The North's Best Pizzas
         </div>
    </div>
</div> 
@endsection