<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Proveedores</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <x-table_one :datos="$suppliers" :ruta="'suplier.'">
            <x-slot name="id">ID</x-slot>
            <x-slot name="description">Direccion</x-slot>
        </x-table_one>
    </div>
</x-admin>
