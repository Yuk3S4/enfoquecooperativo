<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EnfoqueCooperativo | @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="sticky top-0 left-0 p-2 bg-white shadow md:z-10 w-full">
        <div class="container mx-auto flex justify-between items-center md:flex-row">
            <a href="{{ route('home') }}" class="flex items-center gap-4">
                <img class="w-16" src="{{ asset('img/logo-Consultoria_Big.png') }}" alt="Imágen logo">
                <p class="text-lg font-bold">EnfoqueCooperativo</p>
            </a>

            <nav class="hidden md:block">
                <ul class="flex flex-col md:flex-row md:gap-4">
                    <a href="{{ route('home') }}">
                        <li class="text-sm hover:text-gray-600 font-bold">Inicio</li>
                    </a>
                    <a href="{{ route('servicios') }}">
                        <li class="text-sm hover:text-gray-600 font-bold">Servicios</li>
                    </a>
                    <a href="{{ route('conocenos') }}">
                        <li class="text-sm hover:text-gray-600 font-bold">Conócenos</li>
                    </a>
                    <a href="{{ route('contacto') }}">
                        <li class="text-sm hover:text-gray-600 font-bold">Contacto</li>
                    </a>
                </ul>
            </nav>

            <div class="md:hidden">
                <svg
                    id="mobile-menu"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-7 h-7 cursor-pointer"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-300 p-5">
        <div class="container mx-auto py-3 grid gap-4 items-center justify-center text-center mb-11 md:grid-cols-4 md:text-left md:items-start md:gap-0">
            {{-- Logo --}}
            <a class="flex justify-center items-center md:inline-block md:justify-normal" href="{{ route('home') }}">
                <img class="m-0 w-32" src="{{ asset('img/logo-Consultoria.svg') }}" alt="Logotipo de EnfoqueCooperativo">
            </a>

            {{-- Menús --}}
            {{-- <div class="text-gray-500"> --}}
            <div class="flex flex-col gap-2 text-gray-500">
                <h3 class="font-semibold mb-2">Acerca de la empresa</h3>
                <a class="block md:mb-1 hover:text-gray-600" href="{{ route('conocenos') }}">
                    ¿Qué es EnfoqueCooperativo?
                </a>
                <a class="block md:mb-1 hover:text-gray-600" href="{{ route('conocenos') }}">
                    Enunciado de misión
                </a>
            </div>
            <div class="flex flex-col gap-2 text-gray-500">
                <h3 class="font-semibold mb-2">Conecta con EnfoqueCooperativo</h3>
                <a class="block md:mb-1 hover:text-gray-600" href="{{ route('contacto') }}">
                    Contactanos
                </a>
            </div>
            <div class="flex flex-col gap-2 text-gray-500">
                <h3 class="font-semibold mb-2">Nuestros productos</h3>
                <a class="block md:mb-1 hover:text-gray-600" href="{{ route('servicios') }}">
                    Servicios para SOCAP´S
                </a>
            </div>

        </div>

        <div class="footer flex items-center justify-evenly pt-11">
            <p class="text-center text-sm font-bold text-gray-500">&#169; 2023 - EnfoqueCooperativo</p>

            {{-- Redes sociales --}}
            <div class="flex gap-3 items-center justify-center md:justify-end md:items-end">
                <a target="blank" href="https://www.youtube.com/@MX1018100/videos">
                    <img class="w-9" src="{{ asset('img/youtube.png') }}" alt="Logo YouTube">
                </a>
                <a href="#">
                    <img class="w-9" src="{{ asset('img/whatsapp.svg') }}" alt="Logo YouTube">
                </a>
            </div>
        </div>

    </footer>

    {{-- Menu mobile --}}
    <div class="menu p-2">
        <div class="flex justify-between items-center">
            <h2 class="text-white text-2xl md:text-xl font-bold">EnfoqueCooperativo</h2>
            <div>
                <svg
                    id="cerrar-menu"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>

        <nav class="mt-6">
            <ul class="flex justify-center items-center flex-col gap-4 text-center">
                <a href="{{ route('home') }}" class="w-full hover:bg-orange-400 rounded">
                    <li class="text-lg text-white font-semibold">Inicio</li>
                </a>
                <a href="{{ route('servicios') }}" class="w-full hover:bg-orange-400 rounded">
                    <li class="text-lg text-white font-semibold">Servicios</li>
                </a>
                <a href="{{ route('conocenos') }}" class="w-full hover:bg-orange-400 rounded">
                    <li class="text-lg text-white font-semibold">Conócenos</li>
                </a>
                <a href="{{ route('contacto') }}" class="w-full hover:bg-orange-400 rounded">
                    <li class="text-lg text-white font-semibold">Contacto</li>
                </a>
            </ul>
        </nav>

    </div>

    {{-- <script src="{{ asset('resources/js/main.js') }}"></script> --}}
    @vite('resources/js/main.js')
</body>
</html>
