@extends('layouts.layout')

@section('content')

    <div class="flex-cente position-re full-height">
        <div class="content">
            <div class="title m-b-md">
                Pizza List
            </div>

            <p> {{ $name }} </p>
            <p> {{ $age }} </p>

            @foreach ($pizzas as $pizza)
                <div>
                    {{ $loop->index }} {{ $pizza['type'] }} {{ $pizza['base'] }} </p>
                    @if ($loop->first)
                        <span>First in the Loop</span>
                    @endif
                    @if ($loop->last)
                        <span>Last in the Loop</span>
                    @endif

                
                    @php
                        $name = 'Zack';
                        echo $name;
                    @endphp
                </div>
            @endforeach

        </div>
    </div>
@endsection
