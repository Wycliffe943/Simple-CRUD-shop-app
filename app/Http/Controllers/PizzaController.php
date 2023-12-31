<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() 
    {
       
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
            $pizzas = Pizza::latest()->get();

        return view('pizza.index', ['pizzas' => $pizzas]);
    }

    public function create() 
    {
        return view('pizza.create');
       
    }

    public function store() 
    {
    
        // create a new pizza model instance
    
        $pizza = new Pizza();
    
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        
        $pizza->save();
    
        return redirect('/')->with('mssg', 'Thanks for your order!!!');
    }

       public function show($id) {

        $pizza = Pizza::findOrFail($id);
    
        return view('pizza.show', ['pizza'=> $pizza ]); 
       }

       public function destroy($id) 
       {
            $pizza = Pizza::findOrFail($id);
            
            $pizza->delete();

            return redirect('/pizzas');
        }
}
