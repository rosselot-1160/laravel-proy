<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update()
    {
        $cart = auth()->user()->cart;
        $cart->estado = 'Pendiente';
        $cart->save();

        $notification = 'Tu pedido se ha realizado correctamente. Te contactaremos pronto via mail.';
        return back()->with(compact('notification'));
    }
}