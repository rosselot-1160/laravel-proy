<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getUrlAttribute()
    {
        if(substr($this->imagen,0,4) === "http"){
            return $this->imagen;
        }
        return '/img/products/'.$this->imagen;
    }
}
