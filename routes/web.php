<?php

use Illuminate\Support\Facades\Route;

/* forma original de una ruta

    Route::get('/', function () {
        return view('welcome');
    });

tranformandolo ocupando un controlador quedaria asi:
en consola se crea controlador:   php artisan make:controller MiNuevaPaginaController */
Route::get('/', 'MiNuevaPaginaController@inicio');

/* estos solo estan como prueba de ruta. uno llamando a una funcion calculo dentro
de un controlador llamado MiNuevaPaginaController, y otra ruta solamente devolviendo
un mensaje  */
Route::get('/calculo', 'MiNuevaPaginaController@calculo');
Route::get('/prueba', function() {
    return 'estoy en otra pagina';
});

/*
// creado automaticamente al generar el controlador de validacion:
// para incluir componentes de autentificacion
// antes se podia con...   php artisan make:auth  ....pero se cambio en nueva version
composer require laravel/ui
php artisan ui vue --auth				artisan ui:auth

// otras activaciones
php artisan ui bootstrap --auth
php artisan ui react --auth
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');

Route::post('/cart','CartDetailController@store');
Route::delete('/cart','CartDetailController@destroy');

Route::post('/order','CartController@update');

Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function() {
    // muestra listado de productos existentes en la base de datos
    Route::get('/products', 'ProductController@index');
    // obtiene desde el servidor, el formulario de ingreso de un nuevo producto
    Route::get('/products/create', 'ProductController@create');
    // se activa al realizar la aceptacion del formulario a ingresar
    Route::post('/products', 'ProductController@store');
    // obtiene desde el servidor, el formulario de edicion de registro
    Route::get('/products/{id}/edit', 'ProductController@edit');
    // se activa actualizacion de registro
    Route::post('/products/{id}/edit', 'ProductController@update');

    /* Route::delete('/admin/products/{id}', 'ProductController@destroy'); */
    Route::post('/products/{id}/delete', 'ProductController@destroy');

    Route::get('/products/{id}/images', 'ImageController@index');
    Route::post('/products/{id}/images', 'ImageController@store');
    Route::delete('/products/{id}/images', 'ImageController@destroy');
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select');// destacar imagen
});
