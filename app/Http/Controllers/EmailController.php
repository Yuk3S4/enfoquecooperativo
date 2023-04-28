<?php

namespace App\Http\Controllers;

use App\Mail\EnviarCorreo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarEmail()
    {
        // TODO: cambiar el to por el correo del C.E.O de EnfoqueCooperativo
        Mail::to('19041198@itdurango.edu.mx')->send(new EnviarCorreo(request()->nombre, request()->email, request()->telefono, request()->mensaje));
        return redirect()->route('contacto')->with('mensaje', 'Correo enviado exitosamente. ¡Nos pondremos en contacto contigo muy pronto!');
    }
}
