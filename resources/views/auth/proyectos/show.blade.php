@extends('layouts.dashboard')

@section('content')
    <div class="mx-auto overflow-y-auto pb-4">
        <h1 class="text-2xl font-bold text-center">{{ $proyecto->proyecto }}</h1>

        <div class="max-w-3xl mx-auto">
            <div class="flex mt-4 justify-center">
                <button
                    id="agregar-tarea"
                    class="inline-block cursor-pointer mt-4 w-auto p-3 rounded text-sm text-center bg-indigo-500 hover:bg-indigo-600 text-white font-bold"
                >
                    + Nueva Tarea
                </button>
            </div>

            {{-- filtros --}}
            <div class="p-5 bg-gray-500 mt-4 rounded">
                <div id="filtros" class="flex flex-col md:flex-row items-center gap-8">
                    <h2 class="text-3xl font-bold text-white">Filtros:</h2>
                    <div class="flex gap-2 items-center">
                        <label class="text-white text-lg" for="todas">Todas</label>
                        <input
                            type="radio" 
                            id="todas" 
                            name="filtro" 
                            value=""
                            checked
                        />
                    </div>
                    <div class="flex gap-2 items-center">
                        <label for="completadas" class="text-white text-lg">Completadas</label>
                        <input
                            type="radio"
                            id="completadas"
                            name="filtro"
                            value="1"
                        />
                    </div>
                    <div class="flex gap-2 items-center">
                        <label class="text-white text-lg" for="pendientes">Pendientes</label>
                        <input 
                            type="radio" 
                            id="pendientes"
                            name="filtro"
                            value="0" 
                        />
                    </div>
                </div>
            </div>

            <ul id="listado-tareas" class="mt-4">
                
            </ul>        
            
            {{-- <div class="mt-6">
                <livewire:mostrar-tareas :proyecto="$proyecto" />
            </div> --}}
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ asset('js/tareas.js') }}"></script>
@endpush