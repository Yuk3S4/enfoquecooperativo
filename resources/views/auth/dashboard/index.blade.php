@extends('layouts.dashboard')

@section('content')
    <div class="mx-auto overflow-y-auto pb-4">
        <h1 class="text-2xl font-bold text-center">Servicios</h1>

        @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                {{ session('mensaje') }}
            </div>
        @endif

        <a 
            href="{{ route('servicios.create') }}"
            class="inline-block cursor-pointer mt-8 w-auto p-3 rounded text-sm text-center bg-green-500 hover:bg-green-600 text-white font-bold"
        >Crear servicio</a>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Creador</th>
                    <th>Imágen</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            
            <livewire:mostrar-servicios />
        </table>
    </div>
@endsection