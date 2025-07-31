<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Administradores</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @livewire('list-livewire', [
            'title' => 'Cedula',
            'description' => 'Direccion',
            'ruta' => 'admin.',
        ])
    </div>
</x-admin>
