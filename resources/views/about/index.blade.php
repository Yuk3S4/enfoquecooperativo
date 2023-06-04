@extends('layouts.app')

@section('titulo')
    Servicios
@endsection

@section('content')
    <section data-aos="zoom-in-down" class="w-full bg-blue-800 p-14">
        <div class="flex flex-col items-center justify-center container mx-auto text-center text-white">
            <h1 class="text-4xl font-bold mb-6">¿Quiénes somos?</h1>
            <p class="text-lg">Contamos con variadas Certificaciones:
                Coaching Ejecutivo y Ontológico; Formación y  desarrollo del Capital Humano; Planeación y Diseño de Planes de Capacitación. Hemos recorrido diferentes puestos del Sector Financiero: Operador de Ventanilla, Ejecutivo de Cuenta Comercial, Gerencia de Sucursal, Ejecutivo de Empresas y Gobierno, Coordinación y Gerencia de Cobranza.
                Gerencia General de una SOCAP.</p>
            <a class="block w-full mt-6 md:w-auto p-3 rounded text-center bg-white border-none text-blue-600 hover:bg-orange-500 hover:text-white font-bold" href="{{ route('servicios') }}">Conoce nuestros servicios</a>
        </div>
    </section>

    <section data-aos="zoom-in-down">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-4xl md:text-5xl font-extrabold text-orange-500">Nuestro Objetivo</p>
                    <p class="mt-3 text-xl">Proporcionar herramientas con metodologías que ayuden a simplificar la gestión operativo-administrativa-supervisora-formativa para facilitar el cumplimiento de las disposiciones establecidas por la autoridad.</p>
                </div>
            </div>
            <img class="lg:w-1/2" src="{{ asset('img/4.jpg') }}" alt="Nuestro objetivo">
        </div>
    </section>

    <section data-aos="fade-right">
        <div class="flex lg:flex-row flex-col-reverse">
            <img class="lg:w-1/2" src="{{ asset('img/5.jpg') }}" alt="Nuestra Misión">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-4xl md:text-5xl font-extrabold text-orange-500">Nuestra Misión</p>
                    <p class="mt-3 text-xl">Convertirnos en un proveedor de variados servicios que sean de relevante utilidad para que las Sociedades Cooperativas aumenten los elementos para su toma de decisiones y una eficiente planeación estratégica que los conduzca al cumplimiento de sus objetivos trazados y el seguimiento de los mismos.</p>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-left">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-4xl md:text-5xl font-extrabold text-orange-500">Nuestra Visión</p>
                    <p class="mt-3 text-xl">Que las Sociedades Cooperativas reduzcan sus tiempos invertidos en el procesamiento e interpretación de la información de alta importancia para la consecución de actividades en materia de cumplimiento, crecimiento, productividad y expansión, disminuyendo las crisis de estrés que ocasionan las sobrecargas de trabajo.</p>
                </div>
            </div>
            <img class="lg:w-1/2" src="{{ asset('img/6.jpg') }}" alt="Nuestra Visión">
        </div>
    </section>

    <section data-aos="fade-right">
        <div class="flex lg:flex-row flex-col-reverse">
            <img class="lg:w-1/2" src="{{ asset('img/3.jpeg') }}" alt="Nuestra Filosofía">
            <div class="lg:w-1/2 bg-gray-200 p-14">
                <div class="container mx-auto">
                    <p class="text-4xl md:text-5xl font-extrabold text-orange-500">Nuestra Filosofía</p>
                    <p class="mt-3 text-xl">Lograr la satisfacción total de nuestros clientes, para generar la confianza requerida, mostrando en todo momento, actitud de servicio y atención detallada a sus requerimientos para entregar en tiempo y forma los productos ofrecidos.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
