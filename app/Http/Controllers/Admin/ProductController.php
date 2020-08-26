<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        /* $products = Product::all(); */
        /* establece paginacion de 10 en 10 */
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products'));    // listado
    }

    public function create()
    {
        return view('admin.products.create');    // formulario de registro
    }

    public function store(Request $request)
    {
        // registrar el nuevo producto en la bd
        /* dd($request->all());  // imprime el token de valores a guardar */
        $messages = [
            'nombre.required' => 'Es necesario ingresar un nombre para este producto.',
            'nombre.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'descripcion.required' => 'La descripcion corta es un campo obligatorio.',
            'descripcion.max' => 'La descripcion corta admite solo hasta 200 caracteres.',
            'precio.required' => 'Es obligatorio definir un precio para el producto'
        ];
        $product = new Product();
        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->descripcion_completo = $request->input('descripcion_completo');
        $product->precio = $request->input('precio');
        $product->save();

        return redirect('/admin/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));    // formulario de registro para editar
    }

    public function update(Request $request, $id)
    {
        // registrar el producto a modificar en la bd
        $product = Product::find($id);
        $product->nombre = $request->input('nombre');
        $product->descripcion = $request->input('descripcion');
        $product->descripcion_completo = $request->input('descripcion_completo');
        $product->precio = $request->input('precio');
        $product->save();

        return redirect('/admin/products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back();
    }
}
