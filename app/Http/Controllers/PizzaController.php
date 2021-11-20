<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = pizza::latest('name')->get();
           
        return view('pizzas.index',[
            'pizzas' => $pizzas,
    
        ]);
    }
    public function show($id){
        $pizza = pizza::find($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
}
