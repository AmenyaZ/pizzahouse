@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza type</label>
        <select name="type" id="type">
            <option value="Magarita">Magarita</option>
            <option value="Hawaaian">Hawaaian</option>
            <option value="Veg Supreme">Veg Supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <label for="type">Choose Pizza type</label>
        <select name="type" id="type">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garrlic crust">garrlic crust</option>
            <option value="thin and crispy">thin and cripsy</option>
            <option value="thick">thick</option>
        </select>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
