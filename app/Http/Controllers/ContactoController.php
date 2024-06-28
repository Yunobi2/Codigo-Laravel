<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Mail;
use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function store(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu email',
            'asunto.required' => 'Ingresa un asunto',
            'mensaje.required' => 'Ingresa el mensaje',

        ]);

        Mail::to('yunobiluis@gmail.com')->send(new MensajeRecibido ($mensaje));
        
        return new MensajeRecibido($mensaje);

        return 'Mensaje Enviado';
    }
}
