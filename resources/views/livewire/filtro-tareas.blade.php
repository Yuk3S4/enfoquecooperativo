<div>
    <div class="p-5 bg-gray-500 mt-4 rounded">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <h2 class="text-3xl font-bold text-white">Filtros:</h2>
            <div class="flex gap-2 items-center">
                <label class="text-white text-lg" for="todas">Todas</label>
                <input 
                    wire:click="emitirFiltro('todas')"
                    type="radio" 
                    name="filtro" 
                    id="todas" 
                    @if ($filtro === "todas")
                        checked
                    @endif
                />
            </div>
            <div class="flex gap-2 items-center">
                <label class="text-white text-lg" for="pendientes">Pendientes</label>
                <input 
                    wire:click="emitirFiltro('pendientes')"
                    type="radio" 
                    name="filtro" 
                    id="pendientes"
                    @if ($filtro === "pendientes")
                        checked
                    @endif
                />
            </div>
            <div class="flex gap-2 items-center">
                <label class="text-white text-lg" for="completadas">Completadas</label>
                <input
                    wire:click="emitirFiltro('completadas')"
                    type="radio" 
                    name="filtro" 
                    id="completadas"
                    @if ($filtro === "completadas")
                        checked
                    @endif
                />
            </div>
        </div>
    </div>        
</div>
