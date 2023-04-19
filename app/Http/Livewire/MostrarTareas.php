<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use App\Models\Tarea;
use Livewire\Component;

class MostrarTareas extends Component
{
    public $proyecto;
    public $filtro;
    public $status;
    public $tareas;

    protected $listeners = ['eliminarTarea', 'cambiarEstado', 'filtros' => 'filtrarTareas'];

    public function mount(Proyecto $proyecto)
    {        
        $this->proyecto = $proyecto;
    }

    public function eliminarTarea(Tarea $tarea)
    {
        $tarea->delete();

        return redirect()->route('proyectos.show', $tarea->proyecto);
    }    

    public function cambiarEstado(Tarea $tarea)
    {
        if (!$tarea->estado) { // ? Si el estado es 0 - pendiente
            $tarea->estado = 1; // se cambia a 1 - completa
        } else { // ? Si el estado es 1 - completa
            $tarea->estado = 0; // se cambia a 0 - pendiente       
        }
        
        $tarea->save();

        return redirect()->route('proyectos.show', $tarea->proyecto);
    }

    public function obtenerTareas()
    {
        $tareas = Tarea::where('proyecto_id', $this->proyecto->id)
            ->where('estado', $this->status)->get();

        return $tareas; 
    }

    public function filtrarTareas($filtro)
    {
        $this->filtro = $filtro;
        
        switch ($filtro) {
            case 'pendientes':
                $this->status = 0;
                break;
            case 'completadas':
                $this->status = 1;
                break;
        }

        $this->tareas = $this->obtenerTareas();

        return redirect()->route('proyectos.show', $this->proyecto->url);
    }

    public function render()
    {
        $this->tareas = Tarea::where('proyecto_id', $this->proyecto->id)->get();

        // if ($this->filtro === "todas") {
        //     dd('todas');
        //     $tareas = Tarea::where('proyecto_id', $this->proyecto->id)->get();
        // } else { 
        //     dd('filtro');
        //     $tareas = Tarea::when($this->filtro, function($query) {
        //         $query->where('proyecto_id', $this->proyecto->id);
        //     })
        //     ->when($this->filtro, function($query) {
        //         $query->where('estado', $this->status);
        //     })
        //     ->get();
        // }
            
        return view('livewire.mostrar-tareas', [
            'tareas' => $this->tareas,
        ]);
    }
}
