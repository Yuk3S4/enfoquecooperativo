@extends('layouts.dashboard')

@section('content')
    <h1 class="text-2xl font-bold text-center">Editar un producto</h1>

    <div class="py-6">
        <div class="max-w-5xl mx-auto bg-white">
            <div class="p-10 flex flex-col items-center">
                {{-- TODO: trabajar la edición de los servicios --}}
                <livewire:editar-producto :producto="$producto" />
            </div>
        </div>
    </div>
@endsection