<?php
// maneja los correos electrónicos de restablecimiento de contraseña e incluye un rasgo que ayuda a enviar estas notificaciones desde su aplicación a sus usuarios.
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
}
