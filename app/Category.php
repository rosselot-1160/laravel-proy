<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // establece relacion de modelo 1 categoria -> muchos productos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
