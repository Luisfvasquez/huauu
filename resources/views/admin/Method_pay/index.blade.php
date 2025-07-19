<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Metodos de pago</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <x-table_two :datos="$methods" :ruta="'payment_method.'">
            <x-slot name="nombre">Metodos de pago</x-slot>
        </x-table_two>
    </div>
</x-admin>
