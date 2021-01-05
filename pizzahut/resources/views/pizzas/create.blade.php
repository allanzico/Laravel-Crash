@extends('layouts.layout')

@section('content')
   <div class="wrapper create-pizza">
<h1>Create a New Pizza</h1>
<form action="/pizzas" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="type">Type:</label>
    <select name="type" id="type">
        <option value="margerita">margerita</option>
        <option value="hawaiian">hawaiian</option>
        <option value="veg">veg</option>
        <option value="volcano">volcano</option>
    </select>
    <label for="base">Base:</label>
    <select name="base" id="base">
        <option value="cheesy crust">cheesy crust</option>
        <option value="garlic crust">garlic crust</option>
        <option value="Thin and crispy">Thin and crispy</option>
        <option value="classic">classic</option>
    </select>
    <fieldset>
        <label>Extra Toppings</label>
        <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br />
        <input type="checkbox" name="toppings[]" value="pepper">Pepper <br />
        <input type="checkbox" name="toppings[]" value="garlic">Garlic <br />
        <input type="checkbox" name="toppings[]" value="olives">Olives <br />
    </fieldset>
    <input type="submit" value="Order Pizza">
</form>
   </div>

@endsection
