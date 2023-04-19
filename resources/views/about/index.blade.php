@extends('layouts.app')

@section('titulo')
    Servicios
@endsection

@section('content')
    <section class="w-full bg-blue-800 p-14">
        <div class="flex flex-col items-center justify-center container mx-auto text-center text-white">
            <h1 class="text-4xl font-bold mb-6">¿Quiénes somos?</h1>
            <p class="text-lg">Contamos con certificaciones en: Coaching Ejecutivo y Ontológico, Liderazgo Empresarial, Formación de Capital Humano, Planeación y diseño de Cursos, con un amplio historial y experiencia como ejecutivos de cuenta, gerencia de sucursal, ejecutivos de empresa y de gobierno, así como ejecutivos de cobranzas y gerentes de cobranzas</p>
            <a class="block w-full mt-6 lg:w-52 p-2 rounded text-center bg-white border-none text-blue-600 hover:bg-orange-500 hover:text-white font-bold" href="{{ route('contacto') }}">Contáctanos</a>
        </div>
    </section>

    <section>
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-5xl font-extrabold text-orange-500">Nuestro Objetivo</p>
                    <p class="mt-3 text-xl">Proporcionar herramientas con metodologías que ayuden a simplificar la gestión operativo-administrativa-supervisora-formativa para facilitar el cumplimiento de las disposiciones establecidas por la autoridad.</p>
                </div>
            </div>
            <img class="lg:w-1/2" src="{{ asset('img/4.jpg') }}" alt="Nuestro objetivo">
        </div>
    </section>

    <section>
        <div class="flex lg:flex-row flex-col-reverse">
            <img class="lg:w-1/2" src="{{ asset('img/5.jpg') }}" alt="Nuestra Misión">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-5xl font-extrabold text-orange-500">Nuestra Misión</p>
                    <p class="mt-3 text-xl">Convertirnos en un proveedor de variados servicios que sean de relevante utilidad para que las Sociedades Cooperativas aumenten los elementos para su toma de decisiones y una eficiente planeación estratégica que los conduzca al cumplimiento de sus objetivos trazados y el seguimiento de los mismos.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-5xl font-extrabold text-orange-500">Nuestra Visión</p>
                    <p class="mt-3 text-xl">Que las Sociedades Cooperativas reduzcan sus tiempos invertidos en el procesamiento e interpretación de la información de alta importancia para la consecución de actividades en materia de cumplimiento, crecimiento, productividad y expansión, disminuyendo las crisis de estrés que ocasionan las sobrecargas de trabajo.</p>
                </div>
            </div>
            <img class="lg:w-1/2" src="{{ asset('img/6.jpg') }}" alt="Nuestra Visión">
        </div>
    </section>

    <section class="">
        <div class="flex lg:flex-row flex-col-reverse">
            <img class="lg:w-1/2" src="{{ asset('img/7.jpg') }}" alt="Nuestra Filosofía">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-5xl font-extrabold text-orange-500">Nuestra Filosofía</p>
                    <p class="mt-3 text-xl">Lograr la satisfacción total de nuestros clientes, para generar la confianza requerida, mostrando en todo momento, actitud de servicio y atención detallada a sus requerimientos para entregar en tiempo y forma los productos ofrecidos.</p>
                </div>
            </div>
        </div>
    </section>
@endsection