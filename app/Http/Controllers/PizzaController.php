<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pizza;

class PizzaController extends Controller
{
    public function index(){

        $pizzas = pizza::orderBy('name')->get();
           
        return view('pizzas',[
            'pizzas' => $pizzas,
            'name' => request('name'),
            'age' => request('age'),
    
        ]);
    }
    public function show($id){
        return view('details', ['id' => $id]);
    }
}
