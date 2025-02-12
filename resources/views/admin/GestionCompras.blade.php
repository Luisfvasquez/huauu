<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Registro Compras</h1><br>    
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Compra Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Proveedor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Categoria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precio
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                    </tr>
                </thead>
    
                @foreach ($products as $inventory)
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $inventory->buy_id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $inventory->buy->supplier->name_supplier }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $inventory->product->category->name_category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $inventory->product->name_product }}
                            </td>
                            <td class="px-6 py-4">
                                {{  $inventory->product->description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $inventory->product->status }}   
                            </td>
                            <td class="px-6 py-4">
                                {{ $inventory->price_buy }}   
                            </td>
                            <td class="px-6 py-4">
                                {{ $inventory->quantity_buy }}   
                            </td>
                            <td class="px-6 py-4">
                                {{ $inventory->buy->date }}   
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
</x-admin>