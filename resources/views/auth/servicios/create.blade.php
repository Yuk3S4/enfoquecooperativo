@extends('layouts.dashboard')

@section('content')
    <h1 class="text-3xl font-bold text-center">Crear un servicio</h1>

    <div class="py-7">
        <div class="max-w-5xl mx-auto bg-white">
            <div class="p-10 flex flex-col items-center">
                <p class="text-lg text-gray-400 text-left">Para crear un servicio llena todos los campos</p>
                
                <livewire:crear-servicio />
            </div>
        </div>
    </div>
@endsection