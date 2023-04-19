<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EnfoqueCooperativo | Administración</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex h-screen overflow-hidden">
        {{-- SideBar --}}
        <aside class="md:w-56 bg-gray-700 h-full p-3 shadow">
            <div class="flex flex-col items-center">
                <h2 class="text-white text-xl mt-2 font-bold">EnfoqueCooperativo</h2>
                <nav class="flex flex-col items-center text-center mt-6 list-none w-full">
                    <li class="w-full my-1 font-bold uppercase hover:bg-orange-400 text-white cursor-pointer p-1 rounded">
                        <a href="{{ route('dashboard') }}">Servicios</a>
                    </li>
                    <li class="w-full my-1 font-bold uppercase hover:bg-orange-400 text-white cursor-pointer p-1 rounded">
                        <a href="{{ route('dashboard.proyectos') }}">Proyectos</a>
                    </li>
                    <li class="w-full my-1 font-bold uppercase hover:bg-orange-400 text-white cursor-pointer p-1 rounded">
                        <a href="{{ route('dashboard.usuarios') }}">Usuarios</a>
                    </li>
                </nav>
            </div>
        </aside>

        {{-- Principal --}}
        <div class="flex-1">
            {{-- Barra superior --}}
            <div class="py-2 px-5 flex justify-between bg-orange-400 items-center">
                <p>
                    <span class="text-blue-800 font-bold">User: </span>
                    {{ auth()->user()->user }}
                </p>
                <livewire:cerrar-sesion />
            </div>

            {{-- Contenido --}}
            <div class="pt-5 px-6 pb-14 overflow-y-auto h-screen">
                @yield('content')

            </div>
        </div>
    </div>

    @livewireScripts
    {{-- @stack('scripts') - Para agregar scripts personalizados --}}
    @stack('scripts') 
</body>
</html>