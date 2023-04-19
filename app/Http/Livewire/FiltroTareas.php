<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use App\Models\Tarea;
use Livewire\Component;

class FiltroTareas extends Component
{
    public $filtro;
    public $flag;
    // public $pendientes;
    // public $completadas;

    // public function mount()
    // {
    //     if (!$this->flag) {
    //         $this->filtro = "todas";        
    //     }
    // }

    public function emitirFiltro($filtro)
    {
        // $this->filtro = $filtro;
        // $this->flag = true;
        $this->emit('filtros', $filtro);
    }

    public function render()
    {
        return view('livewire.filtro-tareas', [
            // 'filtro' => $this->filtro
        ]);
    }
}
