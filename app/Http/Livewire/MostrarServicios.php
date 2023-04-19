<?php

namespace App\Http\Livewire;

use App\Models\Servicio;
use Livewire\Component;

class MostrarServicios extends Component
{
    protected $listeners = ['eliminarServicio'];

    public function eliminarServicio( Servicio $servicio )
    {
        $servicio->delete();
    }

    public function render()
    {
        $servicios = Servicio::all();
        
        return view('livewire.mostrar-servicios', [
            'servicios' => $servicios
        ]);
    }
}
