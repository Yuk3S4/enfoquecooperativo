<button
    wire:click="$emit('mostrarModal')"
    class="inline-block cursor-pointer mt-4 w-auto p-3 rounded text-sm text-center bg-indigo-500 hover:bg-indigo-600 text-white font-bold"
>
    + Nueva Tarea
</button>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        Livewire.on( 'mostrarModal', () => {
            Swal.fire({
                title: 'Crear tarea',
                input: 'text',
                inputLabel: 'Nombre de la tarea:',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Crear',
                cancelButtonText: 'Cancelar',
                }).then( ( result ) => {
                if (result.isConfirmed) {

                    if (result.value === '') return

                    Livewire.emit('crearTarea', result.value)

                    Swal.fire(
                        'Tarea creada',
                        'Creada correctamente.',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush