<form wire:submit.prevent='login' novalidate>

    @if (session('mensaje'))
        <p class="uppercase border border-red-600 bg-red-100 text-red-600 font-bold p-2 my-3 text-sm">{{ session('mensaje') }}</p>
    @endif

    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="user"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Usuario:</label>
        <input 
            class="w-full p-1 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="text" 
            wire:model="user" 
            id="user"
            placeholder="Nombre de usuario"
        >

        @error('user')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>
    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="password"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Password:</label>
        <input 
            class="w-full p-1 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="password" 
            wire:model="password" 
            id="password"
            placeholder="Contraseña"
        >

        @error('password')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <input 
        type="submit" 
        value="Iniciar sesión"
        class="block mx-auto cursor-pointer mt-8 w-44 p-2 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold"
    >
</form>