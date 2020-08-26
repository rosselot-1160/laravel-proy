<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDetail;

class CartDetailController extends Controller
{
    public function store(Request $request)
    {
        $cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()>user()->cart->id;  // campo calculado, entregara el carro activo
        $cartDetail->product_id = $request->product_id;
        $cartDetail->cantidad = $request->cantidad;
        $cartDetail->save();

        $notification = 'El producto se ha cargado a tu carro de compras existosamente.';
        return back()->with(compact('notification'));
    }

    public function destroy(Request $request)
    {
        $cartDetail = CartDetail::find($request->cart_detail_id);
        if ($cartDetail->cart_id == auth()->user()->cart->id)   // evita vulnerabilidad, verifica que el que elimina sea el actual del caroo y no otro, modificando desde fuera
            $cartDetail->delete();

        $notification = 'El producto ha sido eliminado del carro de compras.';
        return back()->with(compact('notification'));
    }
}
