<div>
    <p 
        wire:dblclick="$emit('mostrarModal', {{ $tarea }})"
        class="my-4 text-lg text-white">{{ $tarea->nombre }}
    </p>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    <script>
        Livewire.on( 'mostrarModal', ({ nombre, id }) => {
            Swal.fire({
                title: 'Editar tarea',
                input: 'text',
                inputValue: nombre,
                inputLabel: 'Nombre nuevo:',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Guardar',
                cancelButtonText: 'Cancelar',
                }).then( ( result ) => {
                if (result.isConfirmed) {

                    if (result.value === '') return

                    Livewire.emit('editarTarea', id, result.value)

                    Swal.fire(
                        'Tarea editada',
                        'Editada correctamente.',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush