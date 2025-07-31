<div>
    <div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{ $title }}
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ $description }}
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Editar</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Eliminar</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    Opcion
                    <span class="sr-only">Registrar</span>
                </th>
            </tr>
        </thead>

        @foreach ($datos as $dato)
            <tbody>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                    wire:key="{{ $dato->id ?? $dato->cedula }} ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        {{ $dato->id ?? $dato->cedula }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $dato->name_supplier ?? $dato->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $dato->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $dato->address }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button wire:click="show({{ $dato->id ?? $dato->cedula }})"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <form wire:submit.prevent="delete({{ $dato->id ?? $dato->cedula }})">
                            <button 
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</button>
                        </form>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button wire:click="$set('create_user', true)"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Crear</button>
                    </td>
                </tr>
            </tbody>
        @endforeach
        @if ($datos->count() == 0)
            <tbody>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                    </th>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4 text-right">
                    </td>
                    <td class="px-6 py-4 text-right">
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                            wire:click="$set('create_user', true)">Crear</button>
                    </td>
                </tr>
            </tbody>
        @endif
    </table>
    @if ($create_user)
    <x-modal_form_create_users />        
    @endif
    @if ($edit_user)
    <x-modal_form_edit_users />
    @endif
</div>

