<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    // establece relacion de modelos "Detalle de carro (N)" con "Producto (1)"
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
