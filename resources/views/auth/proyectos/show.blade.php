@extends('layouts.dashboard')

@section('content')
    <div class="mx-auto overflow-y-auto pb-4">
        <h1 class="text-2xl font-bold text-center">{{ $proyecto->proyecto }}</h1>

        <div class="max-w-3xl mx-auto">
            <div class="flex mt-4 justify-center">
                <livewire:crear-tarea :proyecto="$proyecto" />
            </div>

            {{-- TODO: Trabajar filtros --}}
            <div>
                <livewire:filtro-tareas :proyecto="$proyecto" />
            </div>     
            
            <div class="mt-6">
                <livewire:mostrar-tareas :proyecto="$proyecto" />
            </div>
        </div>
    </div>
@endsection