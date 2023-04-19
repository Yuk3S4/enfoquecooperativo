@extends('layouts.app')

@section('titulo')
    Servicios
@endsection

@section('content')
    @forelse ($servicios as $servicio)
        <section class="bg-gray-200 p-5 mb-6">
            <div class="mx-auto container flex flex-col items-center justify-center lg:flex-row gap-6">
                <div>
                    <p class="text-5xl font-extrabold text-orange-500">{{ $servicio->nombre }}</p>
                    <p class="mt-6 text-xl">{{ $servicio->descripcion }}</p>
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

    {{-- <section class="bg-gray-200 p-5 mb-6">
        <div class="mx-auto container flex flex-col-reverse items-center justify-center lg:flex-row gap-6">
            <img class="rounded shadow-md max-w-2xl" src="{{ asset('img/3.jpg') }}" alt="Imágen del servicio">
            <div>
                <p class="text-5xl font-extrabold text-orange-500">Contabilidad y Finanzas</p>
                <p class="mt-6 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aspernatur! Quos aperiam corrupti atque quaerat delectus ut amet numquam aliquam quia ipsum obcaecati reprehenderit, voluptatum velit, ea ipsa nisi nulla?</p>
            </div>
        </div>
    </section>
    <section class="bg-gray-200 p-5 mb-6">
        <div class="mx-auto container flex flex-col items-center justify-center lg:flex-row gap-6">
            <div>
                <p class="text-5xl font-extrabold text-orange-500">Supervisión</p>
                <p class="mt-6 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aspernatur! Quos aperiam corrupti atque quaerat delectus ut amet numquam aliquam quia ipsum obcaecati reprehenderit, voluptatum velit, ea ipsa nisi nulla?</p>
            </div>
            <img class="rounded shadow-md max-w-2xl" src="{{ asset('img/3.jpg') }}" alt="Imágen del servicio">
        </div>
    </section>

    <section class="bg-gray-200 p-5 mb-6">
        <div class="mx-auto container flex flex-col-reverse items-center justify-center lg:flex-row gap-6">
            <img class="rounded shadow-md max-w-2xl" src="{{ asset('img/3.jpg') }}" alt="Imágen del servicio">
            <div>
                <p class="text-5xl font-extrabold text-orange-500">RRHH</p>
                <p class="mt-6 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aspernatur! Quos aperiam corrupti atque quaerat delectus ut amet numquam aliquam quia ipsum obcaecati reprehenderit, voluptatum velit, ea ipsa nisi nulla?</p>
            </div>
        </div>
    </section> --}}
@endsection