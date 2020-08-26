<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        $images = $product->images;

        $imagesLeft = collect();
        $imagesRight = collect();
        foreach ($images as $key => $image){
            if ($key%2==0)
                $imageLeft->push($image);
            else
                $imageRight->push($image);
        }

        /* return "Mostrar datos del producto $id"; */
        return view('products.show')->with(compact('product','imageLeft','imageRight'));
    }
}
