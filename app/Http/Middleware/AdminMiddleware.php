<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    // maneja la solicitud entrante para administrador
    public function handle($request, Closure $next)
    {
        /* // validacion de que se asegura que que inicie sesion
        if(!auth()->check()){
            return redirect('/login');
        } */

        if(!auth()->user()->admin){
            return redirect('/');
        }
        return $next($request);
    }
}
