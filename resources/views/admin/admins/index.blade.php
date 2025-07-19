<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Administradores</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <x-table_one :datos="$users" :ruta="'admin.'">
            <x-slot name="id">Cedula</x-slot>
            <x-slot name="description">Celular</x-slot>
        </x-table_one>
    </div>
</x-admin>
