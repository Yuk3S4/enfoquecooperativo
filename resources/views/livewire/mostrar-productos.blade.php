<tbody>
    @forelse ($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td class="max-w-2xl">{{ $producto->descripcion }}</td>
            <td class="max-w-2xl">{{ $producto->servicio->nombre }}</td>
            <td class="max-w-2xl">{{ $producto->video }}</td>
            <td>
                <img
                    class="inline-block w-14"
                    src="{{ asset('storage/productos/' . $producto->imagen ) }}" alt="{{ 'Imágen producto ' . $producto->nombre }}">
            </td>
            <td>
                <a 
                    class="text-blue-600 hover:text-blue-800" 
                    href="{{ route('productos.edit', $producto->id) }}">Editar</a>
            </td>
            <td>
                <button 
                    wire:click="$emit('mostrarAlerta', {{ $producto->id }})"
                    class="text-red-600 hover:text-red-800"
                >Eliminar</button>
            </td>
        </tr>        
    @empty
        <tr>
            <td class="text-center font-semibold" colspan="6">No hay productos aún</td>                    
        </tr>
    @endforelse
</tbody>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    

    <script>
        Livewire.on('mostrarAlerta', productoId => {
            Swal.fire({        
                title: '¿Eliminar producto?',
                text: "Un producto eliminado no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {

                    // Eliminar el sevicio
                    Livewire.emit('eliminarProducto', productoId)

                    Swal.fire(
                        'Se eliminó el producto',
                        'Eliminado correctamente.',
                        'success'
                    )
                }
            })
        })
        
    </script>
@endpush