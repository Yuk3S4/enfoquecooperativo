@extends('layouts.app')

@section('titulo')
    Servicios
@endsection

@section('content')
    <section class="mb-32 bg-gray-200 p-10">
        <div class="container mx-auto flex flex-col lg:flex-row justify-center gap-8">
            <div class="lg:w-2/3">
                @if (session()->has('mensaje'))
                    <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                        {{ session('mensaje') }}
                    </div>
                @endif
                <div class="container mx-auto">
                    <h1 class="text-center text-5xl font-extrabold text-orange-500">Contactanos</h1>
                </div>
    
                <p class="text-sm my-5 text-gray-500 font-semibold text-center">Para preguntas generales, por favor completa el siguiente formulario:</p>
    
                <form action="{{ route('enviar-correo') }}" method="POST">
                    @csrf
                    <div class="gap-3 justify-center items-center my-4">
                        <label 
                            for="nombre"
                            class="block text-gray-500 font-bold uppercase mb-2"
                        >Nombre:</label>
                        <input 
                            class="w-full p-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            type="text" 
                            name="nombre" 
                            id="nombre"
                            placeholder="Tu nombre de contacto"
                            required
                        >
                    </div>
    
                    <div class="gap-3 justify-center items-center my-4">
                        <label 
                            for="email"
                            class="block text-gray-500 font-bold uppercase mb-2"
                        >Email:</label>
                        <input 
                            class="w-full p-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            type="text" 
                            name="email" 
                            id="email"
                            placeholder="Tu dirección de correo"
                            required
                        >
                    </div>

                    <div class="gap-3 justify-center items-center my-4">
                        <label 
                            for="telefono"
                            class="block text-gray-500 font-bold uppercase mb-2"
                        >Teléfono:</label>
                        <input 
                            class="w-full p-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            type="number" 
                            name="telefono" 
                            id="telefono"
                            placeholder="Tu teléfono de contacto"
                            required
                        >
                    </div>

                    <div class="gap-3 justify-center items-center my-4">
                        <label 
                            for="mensaje"
                            class="block text-gray-500 font-bold uppercase mb-2"
                        >Mensaje:</label>
                        <textarea
                            id="mensaje"
                            name="mensaje"
                            placeholder="Escribe tu mensaje aquí..."
                            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-72 p-2"
                            required
                        ></textarea>
                    </div>
    
                    <input 
                        type="submit" 
                        value="Enviar"
                        class="block cursor-pointer mt-6 w-52 p-2 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold"
                    >
                </form>
            </div>

            <img 
                src="{{ asset('img/8.jpg') }}" 
                alt="Imágen de contacto"
                class="lg:w-1/3 rounded shadow"
            >

        </div>
    </section>
@endsection