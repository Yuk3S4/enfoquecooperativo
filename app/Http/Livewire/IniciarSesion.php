<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IniciarSesion extends Component
{
    public $user;
    public $password;

    protected $rules = [
        'user' => 'required',
        'password' => 'required',
    ];

    public function login()
    {
        $datos = $this->validate();

        if ( !auth()->attempt([
            'user' => $datos['user'],
            'password' => $datos['password']
        ]) ) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.iniciar-sesion');
    }
}
