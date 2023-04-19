<div>
    @if ($tareas->count())
        <ul>
            @foreach ($tareas as $tarea)
                <li class="flex justify-between items-center bg-gray-500 py-1 px-10 rounded mb-3">                    
                    {{-- <p>{{ $tarea->nombre }}</p> --}}
                    <livewire:mostrar-nombre-tarea :tarea="$tarea">

                    <div class="flex gap-2 text-xs h-6">
                        <button 
                            wire:dblclick="cambiarEstado({{ $tarea->id }})"
                            class="rounded {{ !$tarea->estado ? 'bg-amber-500' : 'bg-blue-700' }} py-1 px-3  flex items-center justify-center text-white uppercase font-semibold"
                        >
                            @if (!$tarea->estado)
                                <p>Pendiente</p>
                            @else
                                <p>Completa</p>
                            @endif
                        </button>

                        <button 
                            wire:dblclick="$emit('mostrarAlerta', {{ $tarea->id }})"
                            class="rounded bg-red-700 py-1 px-3  flex items-center justify-center text-white uppercase font-semibold"
                        >
                            Eliminar
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-center text-gray-400 font-semibold text-lg">No tienes tareas aún</p>
    @endif
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        Livewire.on( 'mostrarAlerta', tareaId => {
            Swal.fire({
            title: '¿Estas seguro de eliminar esta Tarea?',
            showCancelButton: true,
            confirmButtonText: 'Si, estoy seguro',
            cancelButtonText: 'No quiero eliminarla'
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Livewire.emit('eliminarTarea', tareaId)

                Swal.fire(
                    'Se eliminó la tarea',
                    'Eliminada correctamente.',
                    'success'
                )
            }
          })
        })
        
    </script>
@endpush
