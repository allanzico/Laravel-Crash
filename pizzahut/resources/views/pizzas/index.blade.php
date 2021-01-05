@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach ($pizzas as $pizza)
    <div class="pizza-item">
        <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="{{ route('pizzas.show', $pizza->id) }}">{{ $pizza->name }}</a></h4>
    </div>
@endforeach
</div>



    {{-- @for ($i = 0; $i < count($pizzas); $i++)
        <p> {{ $pizzas[$i]['type'] }}</p>
    @endfor --}}
   {{-- <p>{{$type}} - {{$base}} - {{$price}}</p>
   @for ($i = 0; $i <=5; $i++)
   <p> {{ $i }}</p>
   @endfor --}}
   {{-- @if($price > 15)
   <p>Expensive taste</p>
   @elseif($price < 5)
   <p>Cheap taste</p>
   @else
   <p> Normal taste </p>
   @endif

   @unless ($base == 'cheesy crust')
       <p> No cheesy crust mate</p>
   @endunless

   @php
       $name = 'Allan';
       echo($name);
   @endphp --}}

@endsection
