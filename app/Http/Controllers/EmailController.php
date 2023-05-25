<?php

namespace App\Http\Controllers;

use App\Mail\EnviarCorreo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarEmail()
    {
        Mail::to('marco@enfoquecooperativo.com')->send(new EnviarCorreo(request()->nombre, request()->email, request()->telefono, request()->mensaje));
        return redirect()->route('contacto')->with('mensaje', 'Correo enviado exitosamente. ¡Nos pondremos en contacto contigo muy pronto!');
    }
}
