@extends('layout.layouts')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiin">Hawaiin</option>
            <option value="veg-supreme">Veg-Supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        <label for="base">Choose base type</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>

        <fieldset>
            <label for="">Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection


