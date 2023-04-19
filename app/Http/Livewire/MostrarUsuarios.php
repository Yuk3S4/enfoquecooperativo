<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class MostrarUsuarios extends Component
{

    protected $listeners = ['eliminarUsuario'];

    public function eliminarUsuario(User $usuario)
    {
        $usuario->delete();
    }

    public function render()
    {
        $usuarios = User::all();

        return view('livewire.mostrar-usuarios', [
            'usuarios' => $usuarios,
        ]);
    }
}
