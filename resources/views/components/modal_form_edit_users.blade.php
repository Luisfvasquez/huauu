<div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60  ">

    {{-- posicion del modal --}}
    <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 shadow-xl p-6 rounded-xl w-full h-[600px] md:w-4/5 lg:w-3/4 relative">
        {{-- tamaño del cuadro  y estilo --}}
        <button wire:click="$set('edit_user', false)"
            class="absolute top-2 right-2 w-8 h-8 flex items-center justify-center rounded-full bg-red-400 hover:bg-red-200 text-white text-xl font-bold transition">
            &times;
        </button>
        <h1 class="text-5xl font-extrabold dark:text-white">Editar<svg
                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path
                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
            </svg>
        </h1>
        <form class="max-w-sm mx-auto" wire:submit.prevent="update()">    {{-- formulario para editar --}}
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="text"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cedula</label>
                <input readonly name="cedula" type="cedula" id="cedula"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cedula" required wire:model="userEditForm.cedula" />
                @error('userEditForm.cedula')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="text"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input name="name" type="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nombre" wire:model="userEditForm.name" />
                @error('userEditForm.name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input name="email" type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="email" required wire:model="userEditForm.email" />
                @error('userEditForm.email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="text"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                <input name="phone_number" type="text" id="phone_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Telefono" required wire:model="userEditForm.phone_number" />
                @error('userEditForm.phone_number')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <input type="hidden" name="role" value="2">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
        </form>
    </div>
</div>
