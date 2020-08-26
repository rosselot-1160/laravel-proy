<?php

namespace App\Http\Controllers\Auth;
// maneja las solicitudes de restablecimiento de contraseña
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    // Dónde redirigir a los usuarios después de restablecer su contraseña.
    protected $redirectTo = RouteServiceProvider::HOME;
}
