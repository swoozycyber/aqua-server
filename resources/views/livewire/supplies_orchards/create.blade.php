<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-16 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
            <div>
                <div class="justify-center   rounded-full bg-gray-100">
                    <h3 class="text-center px-2 py-2 bg-green-100 rounded-full">NUEVO TIPO DE SUPLEMENTO</h3>
                </div>

                <div class="bg-white space-y-6  px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                    <div class="flex">
                        <h3 class="items-center pt-2 pr-4">Nombre</h3>
                        <div class="mb-4">
                            <input type="text" class=" rounded-full  px-4 pl-6 py-2 border w-full" placeholder="Nombre" wire:model="name">
                            @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="flex">
                        <h3 class="items-center pt-2 pr-4">Numero de Registro</h3>
                        <div class="mb-4">
                            <input type="text" class=" rounded-full  px-4 pl-6 py-2 border w-full" placeholder="Numero De Registro" wire:model="registry_number">
                            @error('registry_number') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="flex">
                        <h3 class="items-center pt-2 pr-4">Hoja de Datos</h3>
                        <div class="mb-4">
                            <input type="text" class=" rounded-full  px-4 pl-6 py-2 border w-full" placeholder="Hoja De Datos" wire:model="data_sheet">
                            @error('data_sheet') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                        <input type="file" wire:model="photo">

                        @error('photo') <span class="error">{{ $message }}</span> @enderror

                        <button type="submit">Save Photo</button>


                    <div class="flex">
                        <h3 class="items-center pt-2 pr-4">Termino de Seguridad</h3>
                        <div class="mb-4">
                            <input type="text" class=" rounded-full  px-4 pl-6 py-2 border w-full" placeholder="Termino De Seguridad" wire:model="security_term">
                            @error('security_term') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="flex">
                        <h3 class="items-center pt-2 pr-4">Categoria de Producto</h3>
                        <select wire:model="product_category_id" class=" rounded-full  px-4 pl-6 py-2 border w-full">
                            <option value="">CATEGORIA DE PRODUCTO</option>
                            @foreach($product_categories as $product_category)

                            <option type="int" value="{{$product_category->id}}">{{$product_category->description}}
                            </option>
                            @endforeach
                        </select>
                    </div>




                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse flex justify-between">
                    <div class="mt-5 sm:mt-6">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-primary text-base leading-6 font-bold text-white shadow-sm hover:border-gray-900 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Guardar
                        </button>
                    </div>
                    <div class="mt-5 sm:mt-6">
                        <button wire:click="closeModalPopover()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2  bg-red-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>