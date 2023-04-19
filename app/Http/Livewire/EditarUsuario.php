<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditarUsuario extends Component
{
    public $user_id;
    public $user;
    public $password;

    // protected $rules = [
    //     'user' => ['required', 'unique:users,user,' .$this->user_id, 'min:3', 'max:10'],
    //     'password' => 'required|min:6'
    // ];

    public function mount(User $usuario)
    {
        $this->user_id = $usuario->id;
        $this->user = $usuario->user;
        // $this->password = $usuario->password;
    }

    public function editarUsuario()
    {
        $datos = $this->validate([
            'user' => ['required', 'unique:users,user,' .$this->user_id, 'min:3', 'max:10'],
            'password' => 'required|min:6'
        ]);

        // Buscar el usuario a editar
        $usuario = User::find($this->user_id);

        // Asignar los valores modificados
        $usuario->user = $datos['user'];
        $usuario->password = Hash::make($datos['password']);

        // Guardar el registro
        $usuario->save();

        // Crear mensaje a la vista
        session()->flash('mensaje', 'El usuario se actualizó correctamente');

        // Redireccionar
        return redirect()->route('dashboard.usuarios');
    }

    public function render()
    {
        return view('livewire.editar-usuario');
    }
}
