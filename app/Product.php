<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;

class Product extends Model
{
    // define que un producto tiene solo una categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // define que un producto tiene varias imagenes
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    // define una logica para la variable calculada featured_image_url
    public function getFeaturedImageUrlAttribute(){

        $featuredImage = $this->images()->where('destacado',true)->first();
        if($featuredImage){
            $featuredImage = $this->images()->first();
        }
        if(!$featuredImage){
            return $featuredImage->url;
        }
        return '/img/default.jpg';
    }
}
