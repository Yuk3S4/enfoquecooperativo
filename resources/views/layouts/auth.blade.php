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

    <div class="w-screen h-screen flex flex-col items-center justify-center">
        <div class="flex flex-col bg-white shadow rounded p-10 ">
            <a href="{{ route('home') }}">
                <img 
                    src="{{ asset('img/logo-Consultoria.svg') }}" 
                    alt="EnfoqueCooperativo logo"
                    class="w-20 mx-auto block"
                >
            </a>
            <h1 class="text-lg my-3 font-bold">Área administrativa restringida</h1>
            @yield('content')
        </div>
    </div>

    @livewireScripts
</body>
</html>