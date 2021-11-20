@extends('layouts.layout')

@section('content')

    <div class="flex-cente position-re full-height">
        <div class="contents">
            <div class="title m-b-md">
                Pizza List
            </div>

           
            @foreach ($pizzas as $pizza)
                <div>
                   {{ $pizza ->name }} - {{ $pizza ->type }} - {{ $pizza ->base }}
                </div>
            @endforeach

        </div>
    </div>
@endsection
