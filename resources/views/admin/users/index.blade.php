<x-admin>
    
<h1 class="flex items-center text-5xl font-extrabold dark:text-white">Usuarios</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Cedula
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    Celular
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Opcion</span>
                    Opcion
                </th>
            </tr>
        </thead>
        
        @foreach ($users as $user)   
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$user->cedula}}
                </th>
                <td class="px-6 py-4">
                    {{$user->name}}
                </td>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
                <td class="px-6 py-4">
                    {{$user->phone_number}}
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{route('users.destroy', $user->cedula )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</button>              
                    </form> </td>                    
            </tr>           
        </tbody>        
    @endforeach
    </table>
</div>
</x-admin>