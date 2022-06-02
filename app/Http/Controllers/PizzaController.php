<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//using the newly created model inside the controller file
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        //fetching the records from the pizzas table
        $pizzas = Pizza::all();
        return view('pizzas.index',[
            'pizzas' => $pizzas,
        ]);
    }

    //displaying the record from the database to the webpage
    public function show($id)
    {
         $pizza = Pizza::findOrfail($id);

         return view('pizzas.show', ['pizza' => $pizza]);
    }

    //creating a form application for users
    public function create()
    {
        return view('pizzas.create');
    }

    //getting input from the user  and saving record to the database.
    public function store()
    {
       //saving the record or input information to the database
       //creating an instance of the pizza model
       $pizza = new Pizza();

       $pizza->type = request('type');
       $pizza->base = request('base');
       $pizza->name = request('name');
       $pizza->toppings = request('toppings');

       $pizza->save();

         return redirect('/')->with('mssg','Thanks for your order');
    }

    //removing a record from the database
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
