<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Metodos de pago</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
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
            @foreach ($methods as $method)
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $method->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $method->name_method }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('payment_method.show', $method->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <form action="{{ route('payment_method.destroy', $method->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</button>
                            </form>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('payment_method.create') }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Crear</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            @if ($methods->count() == 0)
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                        </th>
                        <td class="px-6 py-4">

                        </td>
                        <td class="px-6 py-4 text-right">
                        </td>
                        <td class="px-6 py-4 text-right">
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('payment_method.create') }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Crear</a>
                        </td>
                    </tr>
                </tbody>
            @endif
        </table>
    </div>
</x-admin>
