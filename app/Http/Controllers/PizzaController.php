<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'hawaian', 'base' => 'Cheesy Crust'],
            ['type' => 'Volcano', 'base' => 'gerlic Crust'],
            ['type' => 'Veg Supreme', 'base' => 'Thin & Cripsy']
    
        ];
           
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
