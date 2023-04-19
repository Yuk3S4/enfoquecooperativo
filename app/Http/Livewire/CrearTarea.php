<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use App\Models\Tarea;
use Livewire\Component;

class CrearTarea extends Component
{
    public $proyecto;

    protected $listeners = ['crearTarea'];

    public function mount(Proyecto $proyecto)
    {
        $this->proyecto = $proyecto;
    }

    public function crearTarea($tarea)
    {
        Tarea::create([
            'nombre' => $tarea,
            'proyecto_id' => $this->proyecto->id,
        ]);

        return redirect()->route('proyectos.show', $this->proyecto);
    }

    public function render()
    {
        return view('livewire.crear-tarea');
    }
}
