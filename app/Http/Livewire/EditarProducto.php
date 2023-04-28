<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarProducto extends Component
{
    public $producto_id;
    public $nombre;
    public $descripcion;
    public $video;
    public $imagen;
    public $servicio;
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'descripcion' => 'required',
        'video' => 'nullable|string',
        'servicio' => 'required',
        'imagen_nueva' => 'nullable|image|max:1024',
    ];

    public function mount(Producto $producto)
    {
        $this->producto_id = $producto->id;
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->video = $producto->video;
        $this->imagen = $producto->imagen;
        $this->servicio = $producto->servicio_id;
    }

    public function editarProducto()
    {
        $datos = $this->validate();

        // Revisar si hay una imágen nueva
        if ( $this->imagen_nueva ) {
            $imagen = $this->imagen_nueva->store('public/productos');
            $datos['imagen'] = str_replace('public/productos/', '', $imagen);
        }

        if (!$datos['video']) {
            $datos['video'] = 'https://www.youtube.com/@MX1018100/videos';
        }

        // Encontrar el producto a editar
        $producto = Producto::find($this->producto_id);

        // Asignar los nuevos valores
        $producto->nombre = $datos['nombre'];
        $producto->descripcion = $datos['descripcion'];
        $producto->video = $datos['video'];
        $producto->imagen = $datos['imagen'] ?? $producto->imagen;
        $producto->servicio_id = $datos['servicio'];

        // Guardar el producto
        $producto->save();

        // Crear mensaje
        session()->flash('mensaje', 'El producto se actualizó correctamente');

        // Redireccionar
        return redirect()->route('dashboard.productos');
    }

    public function render()
    {
        $servicios = Servicio::all();

        return view('livewire.editar-producto', [
            'servicios' => $servicios
        ]);
    }
}
