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

    <footer class="bg-gray-300 p-5">
        {{-- <div class="container mx-auto md:grid md:grid-cols-2">
            <div class="flex gap-3 mb-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
                <p class="text-sm font-bold">marco.torre11@itdurango.edu.mx</p>  
            </div>
            <div class="flex gap-3 mb-4 items-center md:col-start-1 md:col-end-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
                  
                <p class="text-sm font-bold">6181344373</p>  
            </div>
            <div class="flex gap-3 mb-4 items-center md:col-start-2 md:col-end-3 md:row-start-1 md:row-end-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
                  
                  
                <p class="text-sm font-bold">C. Isauro Venzor #212 Col. Centro Durango, Dgo. C.P 34000</p>  
            </div>
        </div> --}}
        {{-- <p class="text-center text-sm font-bold">Nuestras redes sociales:</p> --}}
        <div class="flex items-center justify-center gap-5 mb-5">
            <a target="blank" href="https://www.youtube.com/@MX1018100/videos">
                <img class="w-7" src="{{ asset('img/yotube.svg') }}" alt="Logo YouTube">
            </a>
            <a href="#">
                <img class="w-7" src="{{ asset('img/whatsapp.svg') }}" alt="Logo YouTube">
            </a>
        </div>
        <p class="text-center text-sm font-bold">&#169; 2023 - EnfoqueCooperativo</p>
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