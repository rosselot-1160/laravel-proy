<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use File;

class ImageController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $images = $product->images()->orderBy('destacado','desc')->get();
        return view('admin.products.images.index')->with(compact('product','images'));
    }

    public function store(Request $request, $id){
        $file = $request->file('photo');
        $path = public_path() . '/img/products';
        /* $fileName = uniqid() . $file->getClientOriginalName(); */
        $fileName = $file->getClientOriginalName();
        $moved = $file->move($path, $fileName);

        if($moved){
            $productImage = new ProductImage();
            $productImage->imagen = $fileName;
            $productImage->product_id = $id;
            $productImage->save();
        }

        return back();
    }

    public function destroy(Request $request, $id){
        $productImage = ProductImage::find($request->image_id);
        if(substr($productImage->imagen,0,4) === "http"){
            $deleted = true;
        } else {
            $fullPath = public_path() . '/img/products/' . $productImage->imagen;
            $deleted = File::delete($fullPath);
        }
        if($deleted){
            $productImage->delete();
        }
        return back();

    }

    public function select($id, $image){
        ProductImage::where('product_id', $id)->update([
            'destacado' => false
        ]);

        $productImage = ProductImage::find($image);
        $productImage->destacado = true;
        $productImage->save();

        return back();
    }
}
