<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Registro Ventas</h1><br>    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Factura Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cliente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Id Producto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cantidad vendida
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio unitario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Monto Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Método
                    </th>
                </tr>
            </thead>

            @foreach ($products as $inventory)
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $inventory->invoice_id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $inventory->invoice->user_cedula }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $inventory->product_id}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $inventory->product->name_product }}
                        </td>
                        <td class="px-6 py-4">
                            {{  $inventory->quantity_product }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $inventory->unit_price }}   
                        </td>
                        <td class="px-6 py-4">
                            Fecha  
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($methods as $method)
                                @if ($method->invoice_id == $inventory->invoice_id)
                                    {{$method->total_amount}}
                                    @break
                                @endif
                         @endforeach
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($methods as $method)
                            @if ($method->invoice_id == $inventory->invoice_id)
                                {{$method->payment_methods->name_method}}
                                @break
                            @endif
                     @endforeach
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</x-admin>