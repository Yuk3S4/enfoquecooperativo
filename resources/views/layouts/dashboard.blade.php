<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EnfoqueCooperativo | Administración</title>

    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-e85e35ab.css') }}"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:flex md:h-screen md:overflow-hidden">
        {{-- SideBar --}}
        <aside class="sidebar transition-all hidden md:block md:relative md:h-full md:w-56 md:bg-gray-700 p-3 shadow">
            <div class="md:flex md:flex-col md:items-center">

                <div class="flex justify-between items-center">
                    <h2 class="text-white text-3xl md:text-xl mt-2 font-bold">EnfoqueCooperativo</h2>
                    <div class="md:hidden">
                        <svg
                            id="cerrar-menu"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>

                <nav class="flex flex-col items-center text-center mt-6 list-none w-full">
                    <li class="text-2xl font-semibold md:text-base md:font-bold w-full my-2 md:my-1 uppercase hover:bg-orange-400 text-white cursor-pointer p-1 rounded">
                        <a href="{{ route('dashboard') }}">Servicios</a>
                    </li>
                    <li class="text-2xl font-semibold md:text-base md:font-bold w-full my-2 md:my-1 uppercase hover:bg-orange-400 text-white cursor-pointer p-1 rounded">
                        <a href="{{ route('dashboard.productos') }}">Productos</a>
                    </li>
                    <li class="text-2xl font-semibold md:text-base md:font-bold w-full my-2 md:my-1 uppercase hover:bg-orange-400 text-white cursor-pointer p-1 rounded">
                        <a href="{{ route('dashboard.usuarios') }}">Usuarios</a>
                    </li>
                    <li class="text-2xl font-semibold md:text-base md:font-bold w-full my-2 md:my-1 uppercase hover:bg-orange-400 text-white cursor-pointer p-1 rounded">
                        <a href="{{ route('dashboard.proyectos') }}">Proyectos</a>
                    </li>
                </nav>
            </div>

            <div class="md:hidden">
                <livewire:cerrar-sesion />
            </div>
        </aside>

        {{-- Principal --}}
        <div class="md:flex-1">
            {{-- Barra superior --}}
            <div class="hidden md:flex py-2 px-5 justify-between bg-orange-400 items-center">
                <p>
                    <span class="text-blue-800 font-bold">User: </span>
                    {{ auth()->user()->user }}
                </p>
                <livewire:cerrar-sesion />
            </div>

            {{-- Barra mobile --}}
            <div class="md:hidden flex bg-gray-700 py-4 px-7 justify-between items-center text-white">
                <h1 class="text-3xl font-bold">EnfoqueCooperativo</h1>
                <div>
                    <img
                        id="mobile-menu"
                        class="w-2 cursor-pointer"
                        src="{{ asset('img/menu.svg') }}"
                        alt="Menu mobile"
                    />
                </div>
            </div>

            {{-- Contenido --}}
            <div class="pt-5 px-6 pb-14 overflow-y-auto md:h-screen">
                @yield('content')

            </div>
        </div>
    </div>

    @livewireScripts
    {{-- @stack('scripts') - Para agregar scripts personalizados --}}
    @stack('scripts')

    {{-- <script src="{{ asset('build/assets/app-7731489c.js') }}"></script> --}}
    @vite('resources/js/app.js')
</body>
</html>
