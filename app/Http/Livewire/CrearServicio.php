<?php

namespace App\Http\Livewire;

use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearServicio extends Component
{
    public $nombre;
    public $descripcion;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|unique|string',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:1024',
    ];

    public function crearServicio()
    {
        $datos = $this->validate();

        // Almacenar la imagen
        // en storage/app/public/servicios
        $imagen = $this->imagen->store('public/servicios');
        $datos['imagen'] = str_replace('public/servicios', '', $imagen);

        // Crear el sevicio
        Servicio::create([
            'nombre' => $datos['nombre'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
            'user_id' => auth()->user()->id,
        ]);

        // Crear un mensaje
        session()->flash('mensaje', 'El servicio se creó correctamente');

        // Redireccionar al usuario
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.crear-servicio');
    }
}
