<tbody>
    @forelse ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->user }}</td>
            <td>
                <a 
                    class="text-blue-600 hover:text-blue-800" 
                    href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
            </td>
            <td>
                <button 
                    class="text-red-600 hover:text-red-800"
                    wire:click="$emit('mostrarAlerta', {{ $usuario->id }})"
                >Eliminar</button>
            </td>
        </tr>
    @empty
        <tr>
            <td class="text-center font-semibold" colspan="3">No hay usuarios aún</td>                    
        </tr>
    @endforelse
</tbody>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    

    <script>
        Livewire.on('mostrarAlerta', usuarioId => {
            Swal.fire({        
                title: '¿Eliminar usuario?',
                text: "Un usuario eliminado no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {

                    // Eliminar la vacante
                    Livewire.emit('eliminarUsuario', usuarioId)

                    Swal.fire(
                        'Se eliminó el usuario',
                        'Eliminado correctamente.',
                        'success'
                    )
                }
            })
        })

        
    </script>
@endpush