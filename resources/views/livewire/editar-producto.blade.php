<form class="w-full" wire:submit.prevent='editarProducto' novalidate>
    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="nombre"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Nombre:</label>
        <input 
            id="nombre"
            class="w-full p-1 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="text" 
            wire:model="nombre" 
            :value="old('nombre')"
            placeholder="Nombre del producto"
        />

        @error('nombre')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="servicio"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Servicio al que pertenece:</label>
        <select 
            id="servicio"
            wire:model="servicio" 
            class="w-full p-1 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        >
            <option>-- Seleccione --</option>
            @foreach ($servicios as $servicio)
                <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
            @endforeach
        </select>

        @error('servicio')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="descripcion"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Descripción:</label>
        <textarea
            id="descripcion"
            wire:model="descripcion"
            placeholder="Descripción del producto"
            class="w-full border p-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-72"
        ></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="video"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Video de YouTube:</label>
        <input 
            id="video"
            class="w-full p-1 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="text" 
            wire:model="video" 
            :value="old('video')"
            placeholder="Enlace de video del producto"
        />

        @error('video')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="imagen"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Imágen:</label>
        <input 
            id="imagen"
            class="w-full p-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="file" 
            wire:model="imagen_nueva" 
            accept="image/*"
        />   
        
        <div class="my-5 w-80">
            <label 
                for="imagen"
                class="block text-gray-500 font-bold uppercase mb-2"
            >Imágen actual:</label>
            <img src="{{ asset('storage/productos/' . $imagen) }}" alt={{ 'Imágen producto' . $nombre }}>
        </div>

        <div class="my-5 w-80">
            @if ($imagen_nueva)
                <p class="mb-2 text-gray-500 text-sm">Preview de la imágen nueva:</p>
                <img src="{{ $imagen_nueva->temporaryUrl() }}">
            @endif
        </div>

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div class="flex items-center gap-3">
        <button 
            type="submit"
            class="inline-block cursor-pointer p-3 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold"    
        >Guardar</button>
        <p class="text-sm text-red-400">* Para poder crear debe esperar a que cargue el preview de la imágen</p>
    </div>

</form>