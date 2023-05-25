@extends('layouts.app')

@section('titulo')
    Servicios
@endsection

@section('content')
    @forelse ($servicios as $servicio)
        <section class="bg-gray-200 p-5 mb-6">
            <div class="mx-auto container flex flex-col items-center justify-center lg:flex-row gap-6">
                <div>
                    <p class="text-4xl md:text-5xl font-extrabold text-orange-500">{{ $servicio->nombre }}</p>
                    <p class="mt-6 text-xl">{{ $servicio->descripcion }}</p>
                    <a class="inline-block w-full mt-6 lg:w-52 p-2 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold" href="{{ route('productos', $servicio->nombre) }}">Conoce sus productos</a>
                </div>
                <img
                    class="rounded shadow-md max-w-2xl"
                    src="{{ asset('storage/servicios/' . $servicio->imagen ) }}"
                    alt="{{ 'Imágen servicio ' . $servicio->nombre }}">
            </div>
        </section>
    @empty
        <p class="container text-center my-10 text-lg font-semibold text-gray-400">No hay servicios existentes</p>
    @endforelse
@endsection
