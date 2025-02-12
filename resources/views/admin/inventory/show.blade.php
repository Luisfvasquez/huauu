<x-admin>
    <h1 class="flex items-center text-5xl font-extrabold dark:text-white">Edit Producto</h1><br>
    <form class="max-w-md mx-auto" method="POST" action="{{ route('inventory.update', $product->id) }}">   
        @csrf
        @method('PUT')
          <div class="relative z-0 w-full mb-5 group">
              <input type="text" name="name_product" id="floating_" value="{{ old('name_product', $product->name_product) }}"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" " required />
              <label for="floating_"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  Nombre del producto </label>
          </div>
          <div class="relative z-0 w-full mb-5 group">
              <input type="text" name="description" id="floating_" value="{{ old('description', $product->description) }}"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" " required />
              <label for="floating_"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                  Descripcion </label>
          </div> 
          <div class="relative z-0 w-full mb-5 group">
           <label for="countries"
               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorias</label>
           <select id="countries" name="category_id"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
               <option selected>Seleccione una categoria</option>
               @foreach ($categories as $category)
                   <option @selected(old('category_id',$category->id)) value="{{ $category->id }}">{{ $category->name_category }}
                   </option>
               @endforeach
           </select>
       </div>
       <div class="relative z-0 w-full mb-5 group">
        <input type="hidden" name="status" value="0">
        <input name="status"  id="checked-checkbox" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status</label>
    </div>
          <button type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
      </form>
</x-admin>