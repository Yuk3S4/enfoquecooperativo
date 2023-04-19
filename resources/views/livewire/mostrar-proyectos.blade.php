<div>
    @if ($proyectos->count())
        <ul class="grid md:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach ($proyectos as $proyecto)
                <li class="bg-purple-400 hover:bg-purple-500 transition-colors font-semibold p-5 flex items-center justify-center rounded text-white">
                    <a href="{{ route('proyectos.show', $proyecto->url) }}">
                        {{ $proyecto->proyecto }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="my-10">
            {{ $proyectos->links() }}
        </div>
    @else
        <p class="text-lg text-center font-semibold text-gray-400">
            No tienes proyectos aún 
            <span class="text-blue-600">¡Crea uno ya!</span>
        </p>
    @endif
</div>