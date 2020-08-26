<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // crea 100 nuevos productos aleatorios a partir de model factory ProductsFactory
        // todo aca es aleatorio

/*         factory(Category::class, 5)->create();
        factory(Product::class, 100)->create();
        factory(ProductImage::class, 200)->create(); */

        // crea solamente 5 categorias y acotado a 20 productos
        // pero no funciona anidado---- ver solucion

/*         $categories = factory(Category::class, 5)
            ->create()
            ->each(function ($c) {
                $c->posts()->saveMany(factory(Product::class, 20)->make());
                $products->each(function($p){
                    $images = factory(ProductImage::class, 5)->make();
                    $p->images()->saveMany($images);
                });
            }); */


        // Es lo mismo que el bloque anterior pero se detalle paso a paso

        $categories = factory(Category::class, 5)->create();
        $categories->each(function ($category){
            $products = factory(Product::class, 20)->make();
            $category->products()->saveMany($products);
            $products->each(function($p){
                $images = factory(ProductImage::class, 5)->make();
                $p->images()->saveMany($images);
            });
        });


    }


}
