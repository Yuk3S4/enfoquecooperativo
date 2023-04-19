<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CrearUsuario extends Component
{
    public $user;
    public $password;

    protected $rules = [
        'user' => 'required|unique:users|min:3|max:10',
        'password' => 'required|min:6'
    ];

    public function crearUsuario(Request $request)
    {
        $datos = $this->validate();
        
        // Crear al usuario
        $user = User::create([
            'user' => $datos['user'],
            'password' => Hash::make($datos['password']),
        ]);

        // Crear un mensaje
        session()->flash('mensaje', 'El usuario se creó correctamente');

        // Redireccionar
        return redirect()->route('dashboard.usuarios');
    }

    public function render()
    {
        return view('livewire.crear-usuario');
    }
}
