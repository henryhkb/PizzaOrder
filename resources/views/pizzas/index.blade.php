@extends('layout.layouts')
@section('content')
<div class="items-top justify-center min-h-screen bg-gray-100 gray:bg-gray-900 sm:items-center py-4 sm:pt-0">
      <div class="wrapper pizza-index">    
            <h1>Pizza Orders</h1>
            @foreach($pizzas as $pizza)
                <div class="pizza-item">
                    <img src="/img/pizza.png" alt="pizza icon ">
                    <h4><a href="/pizzas/{{ $pizza->id}}">{{ $pizza->name }}</a></h4>  {{ $pizza->type }} - {{ $pizza->base }}
                </div>
     
       @endforeach
        </div> 
</div>
@endsection


