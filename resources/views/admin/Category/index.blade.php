<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Categorias</h1> <br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <x-table_two :datos="$categories" :ruta="'category.'">
            <x-slot name="nombre">Categorias</x-slot>
        </x-table_two>
    </div>
</x-admin>
