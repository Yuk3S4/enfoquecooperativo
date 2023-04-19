<tbody>
    @forelse ($servicios as $servicio)
        <tr>
            <td>{{ $servicio->nombre }}</td>
            <td class="max-w-2xl">{{ $servicio->descripcion }}</td>
            <td>{{ $servicio->creador->user }}</td>
            <td>
                <img
                    class="inline-block w-28"
                    src="{{ asset('storage/servicios/' . $servicio->imagen ) }}" alt="{{ 'Imágen servicio ' . $servicio->nombre }}">
            </td>
            <td>
                <a 
                    class="text-blue-600 hover:text-blue-800" 
                    href="{{ route('servicios.edit', $servicio->id) }}">Editar</a>
            </td>
            <td>
                <button 
                    wire:click="$emit('mostrarAlerta', {{ $servicio->id }})"
                    class="text-red-600 hover:text-red-800"
                >Eliminar</button>
            </td>
        </tr>        
    @empty
        <tr>
            <td class="text-center font-semibold" colspan="6">No hay servicios aún</td>                    
        </tr>
    @endforelse
</tbody>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    

    <script>
        Livewire.on('mostrarAlerta', servicioId => {
            Swal.fire({        
                title: '¿Eliminar servicio?',
                text: "Un servicio eliminado no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {

                    // Eliminar el sevicio
                    Livewire.emit('eliminarServicio', servicioId)

                    Swal.fire(
                        'Se eliminó el servicio',
                        'Eliminado correctamente.',
                        'success'
                    )
                }
            })
        })
        
    </script>
@endpush