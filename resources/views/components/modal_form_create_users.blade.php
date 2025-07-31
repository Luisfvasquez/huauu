<div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60  ">
    {{-- posicion del modal --}}
    <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 shadow-xl p-6 rounded-xl w-full h-[600px] md:w-4/5 lg:w-3/4 relative">
        {{-- tamaño del cuadro  y estilo --}}
        <button wire:click="$set('create_user', false)"
            class="absolute top-2 right-2 w-8 h-8 flex items-center justify-center rounded-full bg-red-400 hover:bg-red-200 text-white text-xl font-bold transition">
            &times;
        </button>
        <form class="max-w-sm mx-auto" wire:submit.prevent="save">
            <br>
            @csrf
            <div class="mb-2">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cedula</label>
                <input value="{{ old('cedula') }}" name="cedula" type="cedula" id="cedula" wire:model="userCreateForm.cedula"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cedula" required />
                @error('userCreateForm.cedula')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="text"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input value="{{ old('name') }}" name="name" type="name" id="name" wire:model="userCreateForm.name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nombre" required />
                @error('userCreateForm.name')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input value="{{ old('email') }}" name="email" type="text" id="text" wire:model="userCreateForm.email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="email" required />
                @error('userCreateForm.email')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                <input name="password" type="password" id="text" wire:model="userCreateForm.password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Contraseña" required />
                @error('userCreateForm.password')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verifica
                    Contraseña</label>
                <input name="password_confirmation" type="password" id="text" wire:model="userCreateForm.password_confirmation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Contraseña" required />
                @error('userCreateForm.password_confirmation')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="text"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                <input value="{{ old('phone_number') }}" name="phone_number" type="text" id="phone_number"
                    wire:model="userCreateForm.phone_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Telefono" required />
                @error('userCreateForm.phone_number')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
</div>
