@extends('layouts.app')

@section('titulo')
    Home
@endsection

@section('content')
    <section>
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-5xl font-extrabold text-orange-500">Disminuye la inversión de tiempo</p>
                    <p class="mt-3 text-xl">Interpreta la información de alto valor, aumenta tu productividad  y disminuye el estrés del sobre trabajo.</p>
                    <a class="inline-block w-full mt-6 lg:w-52 p-2 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold" href="{{ route('conocenos') }}">Conocenos</a>
                </div>
            </div>
            <img class="lg:w-1/2" src="{{ asset('img/1.jpeg') }}" alt="Imágen de tiempo">
        </div>
    </section>

    <section
        <div class="flex lg:flex-row flex-col-reverse">
            <img class="lg:w-1/2" src="{{ asset('img/2.webp') }}" alt="Imágen de tiempo">
            <div class="lg:w-1/2 bg-gray-200 p-14 justify-start">
                <div class="container mx-auto">
                    <p class="text-5xl font-extrabold text-orange-500">Conoce nuestros servicios</p>
                    <ul class="mt-4">
                        <li class="flex gap-2 items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                            </svg>
                              
                              
                            <p class="text-xl">Dirección General</p>
                        </li>
                        <li class="flex gap-2 items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>                              
                              
                            <p class="text-xl">Contabilidad y finanzas</p>
                        </li>
                        <li class="flex gap-2 items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
                            </svg>
                              
                              
                            <p class="text-xl">Operaciones</p>
                        </li>
                        <li class="flex gap-2 items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
                            </svg>
                              
                              
                            <p class="text-xl">Supervisión</p>
                        </li>
                        <li class="flex gap-2 items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                              
                            <p class="text-xl">RRHH</p>
                        </li>
                    </ul>
                    <a class="inline-block w-full mt-6 lg:w-52 p-2 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold" href="{{ route('servicios') }}">Ve nuestros servicios</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-5xl font-extrabold text-orange-500">Acerca de nosotros</p>
                    <p class="mt-3 text-xl">Contamos con una amplia experiencia trabajando con empresas por el país, en coaching, gerencia y liderazgo en las organizaciones, además tenemos contactos y experiencia tratando con empresas de carácter internacional.</p>
                    <a class="inline-block w-full mt-6 lg:w-52 p-2 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold" href="{{ route('conocenos') }}">Conócenos</a>
                </div>
            </div>
            <img class="lg:w-1/2" src="{{ asset('img/logo-Consultoria.svg') }}" alt="Imágen de tiempo">
        </div>
    </section>
@endsection