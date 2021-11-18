@extends('layouts.layout')
@section('content')

<div class="flex-cente position-re full-height">
    <div class= "content">
        <div class = "title m-b-md">
        Pizza List
        </div>
        <p>{{ $type }} - {{ $base }} - {{ $price }} </p>
        @if($price > 15)
            <p> this pizza is expensive</p>
            @elseif ($price < 15)
            <p>This pizza is cheap</p>
        @endif

        @unless ($base == 'Cheesy Crust')
        <p>You dont have a cheesy Crust</p>
    
        @endunless
        @php
        $name = 'Zack';
        echo($name)       
        @endphp

    </div>
</div>
@endsection