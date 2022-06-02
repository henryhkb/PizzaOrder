@extends('layout.layouts')

@section('content')
               <div class="content">
                    <img src="/img/pizza-house.png" alt="this is the pizza  house logo">
                    <div class="title m-b-md">
                        <h2> Community three Best Pizzas</h2>
                    </div>
                    <p class="mssg">{{ session('mssg') }}</p>
                    <a href="/pizzas/create">Order a Pizza</a>
                    <p class="mssg">{{ session('delete') }}</p>
                </div> 
                
@endsection

