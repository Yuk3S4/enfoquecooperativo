<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class MostrarNombreTarea extends Component
{
    public $tarea;

    protected $listeners = ['editarTarea'];

    public function mount(Tarea $tarea)
    {
        $this->tarea = $tarea;
    }

    public function editarTarea(Tarea $tarea, $nombre)
    {
        $tarea->nombre = $nombre;

        $tarea->save();

        return redirect()->route('proyectos.show', $tarea->proyecto);
    }

    public function render()
    {
        return view('livewire.mostrar-nombre-tarea', [
            'tarea' => $this->tarea
        ]);
    }
}
