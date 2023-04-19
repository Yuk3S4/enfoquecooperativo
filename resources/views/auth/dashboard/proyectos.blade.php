@extends('layouts.dashboard')

@section('content')
    <div class="mx-auto overflow-y-auto pb-4">
        <h1 class="text-2xl font-bold text-center">Proyectos</h1>

        <div class="flex mt-4 justify-center">
            <livewire:crear-proyecto />
        </div>

        <div class="mt-8">
            <livewire:mostrar-proyectos />
        </div>
    </div>
@endsection