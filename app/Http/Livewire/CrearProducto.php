<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearProducto extends Component
{
    public $nombre;
    public $descripcion;
    public $servicio;
    public $video;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'descripcion' => 'required',
        'servicio' => 'required',
        'video' => 'nullable|string',
        'imagen' => 'required|image|max:1024',
    ];

    public function crearServicio()
    {
        $datos = $this->validate();

        // Almacenar la imagen
        // en storage/app/public/storage/productos
        $imagen = $this->imagen->store('public/productos');
        $datos['imagen'] = str_replace('public/productos/', '', $imagen);

        if (!$datos['video']) {
            $datos['video'] = 'https://www.youtube.com/@MX1018100/videos';
        }

        // Crear el producto
        Producto::create([
            'nombre' => $datos['nombre'],
            'descripcion' => $datos['descripcion'],
            'video' => $datos['video'],
            'imagen' => $datos['imagen'],
            'servicio_id' => $datos['servicio'],
        ]);

        // Crear un mensaje
        session()->flash('mensaje', 'El producto se creó correctamente');

        // Redireccionar al usuario
        return redirect()->route('dashboard.productos');
    }

    public function render()
    {
        $servicios = Servicio::all();

        return view('livewire.crear-producto', [
            'servicios' => $servicios
        ]);
    }
}
