@extends('layouts.dashboard')

@section('content')
    <h1 class="text-2xl font-bold text-center">Editar un servicio</h1>

    <div class="py-6">
        <div class="max-w-5xl mx-auto bg-white">
            <div class="p-10 flex flex-col items-center">
                
                <livewire:editar-servicio :servicio="$servicio" />
                {{-- TODO: trabajar la imágen --}}
            </div>
        </div>
    </div>
@endsection