@extends('layouts.app')

@section('titulo')
    Productos
@endsection

@section('content')
    @forelse ($productos as $producto)
    <section class="bg-gray-200 p-5 mb-6">
        <div class="mx-auto container flex flex-col items-center justify-center lg:flex-row gap-6">

            @if ($producto->media)
                <div>
                    <iframe
                    width="800"
                    height="420"
                    src="{{ $producto->video }}"
                    title="Monitoreo de Proyecciones Financieras"
                    class="rounded max-w-xl"
                    {{-- frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" --}}
                    allowfullscreen
                    ></iframe>
                </div>
            @else
                <a href="{{ $producto->video }}" target="blank">
                    <img
                        class="rounded shadow-md max-w-xl hover:shadow-md"
                        src="{{ asset('storage/productos/' . $producto->imagen ) }}"
                        alt="{{ 'Imágen producto ' . $producto->nombre }}"
                    />
                </a>
            @endif

            <div>
                <h2
                    class="text-4xl md:text-5xl font-extrabold text-orange-400"
                >{{ $producto->nombre }}</h2>
                <p class="mt-6 text-xl">{{ $producto->descripcion }}</p>
                <a class="inline-block w-full mt-6 lg:w-52 p-2 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold" href="{{ route('contacto') }}">Contactanos</a>
            </div>
        </div>
    </section>
    @empty
    <p class="container text-center my-10 text-lg font-semibold text-gray-400">No hay productos existentes</p>
    @endforelse
@endsection
