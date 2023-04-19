<form class="w-full" wire:submit.prevent='crearUsuario' novalidate>
    <div class="gap-3 justify-center items-center my-4">
        <label 
            for="user"
            class="block text-gray-500 font-bold uppercase mb-2"
        >Nombre:</label>
        <input 
            id="user"
            class="w-full p-1 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="text" 
            wire:model="user" 
            :value="old('user')"
            placeholder="Nombre de usuario"
        />

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
            id="password"
            class="w-full p-1 border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="password" 
            wire:model="password" 
            placeholder="Password de usuario"
        />

        @error('password')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <button 
        type="submit"
        class="inline-block cursor-pointer mt-3 p-3 rounded text-center bg-blue-500 hover:bg-blue-700 text-white font-bold"  
    >Crear</button>

</form>