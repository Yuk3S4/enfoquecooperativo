<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use Livewire\Component;

class CrearProyecto extends Component
{
    protected $listeners = ['crearProyecto'];

    public function crearProyecto($proyecto)
    {        
        // Crear el proyecto
        Proyecto::create([
            'proyecto' => $proyecto,
            'url' => md5(uniqid()),
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('dashboard.proyectos');
    }

    public function render()
    {
        return view('livewire.crear-proyecto');
    }
}
