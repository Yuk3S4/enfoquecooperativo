<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CerrarSesion extends Component
{
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.cerrar-sesion');
    }
}
