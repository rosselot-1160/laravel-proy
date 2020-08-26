<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MiNuevaPaginaController extends Controller
{
    public function inicio(){
        /* $products = Product::all(); */
        $products = Product::paginate(9);

        /*  $varA = 5;
        $varB = 8;
        return view('welcome')->with(compact('products','varA','varB')); */
        // compact crea un arreglo asociativo de valores
        return view('welcome')->with(compact('products'));
    }

    public function calculo(){
        $a=1;
        $b=3;
        $c=$a+$b;
        return "la suma en $c";
    }
}
