<?php

namespace App\Http\Livewire;

use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarServicio extends Component
{
    public $servicio_id;
    public $nombre;
    public $descripcion;
    public $imagen;
    public $imagen_nueva;
    
    protected $rules = [
        'nombre' => 'required|string',
        'descripcion' => 'required',
        'imagen_nueva' => 'nullable|image|max:1024',
    ];

    use WithFileUploads;

    public function mount(Servicio $servicio)
    {
        $this->servicio_id = $servicio->id;
        $this->nombre = $servicio->nombre;        
        $this->descripcion = $servicio->descripcion;
        $this->imagen = $servicio->imagen;
    }

    public function editarServicio()
    {
        $datos = $this->validate();

        // Revisar si hay una imágen nueva
        if ( $this->imagen_nueva ) {
            $imagen = $this->imagen_nueva->store('public/servicios');
            $datos['imagen'] = str_replace('public/servicios/', '', $imagen);
        }

        // Encontrar el servicio a editar
        $servicio = Servicio::find($this->servicio_id);

        // Asignar los nuevos valores
        $servicio->nombre = $datos['nombre'];
        $servicio->descripcion = $datos['descripcion'];
        $servicio->imagen = $datos['imagen'] ??
        $servicio->imagen;

        // Guardar el servicio
        $servicio->save();

        // Crear mensaje
        session()->flash('mensaje', 'El servicio se actualizó correctamente');

        // Redireccionar
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.editar-servicio');
    }
}
