<?php

namespace App\Http\Controllers\Auth;
// manejar la verificación por correo electrónico de cualquier usuario que se haya registrado recientemente en la aplicación. Los correos electrónicos también se pueden reenviar si el usuario no recibió el mensaje de correo electrónico original.
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    use VerifiesEmails;
    // Dónde redirigir a los usuarios después de la verificación.
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
