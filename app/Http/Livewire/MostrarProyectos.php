<?php

namespace App\Http\Livewire;

use App\Models\Proyecto;
use Livewire\Component;

class MostrarProyectos extends Component
{
    public function render()
    {
        $proyectos = Proyecto::where('user_id', auth()->user()->id)->paginate(16);

        return view('livewire.mostrar-proyectos', [
            'proyectos' => $proyectos,
        ]);
    }
}
