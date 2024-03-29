<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" {{--wire:click="closemodalfenofase()"--}} aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
            <div>
                <div class="justify-center   rounded-full bg-gray-100">
                    <h3 class="text-center px-2 py-2 bg-green-100 rounded-full">NUEVO FENOFASE PARA <br> << {{$datos_orchard->name_orchard}} >></h3>
                </div>

                <div class="mt-3 text-center sm:mt-5">
                    <div class="mt-2">
                        <!--FORMULARIO-->
                        <form enctype="multipart/form-data">
                            <div class="shadow sm:rounded-md sm:overflow-hidden ">
                                <div class=" sm:rounded-md sm:overflow-hidden shadow-lg shadow-indigo-500/40">
                                    <div class="bg-white py-6 px-4 space-y-6 sm:p-6 ">
                                        <div class="">
                                            <div class="flex justify-center">
                                                <div class="">
                                                    <div class="pt-2 pr-4 ">
                                                        <h3 class="text-center block text-sm font-medium text-gray-700 pr-4">Fenofase </h3>
                                                        <select wire:model="phenophase_id" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">Selecciona Opción</option>
                                                            @foreach($phenophases as $pheno)
                                                                <option type="int" value="{{$pheno->id}}">{{$pheno->phenophase}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('phenophase_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                                </div>
                                            </div>

                                            {{--<input type="hidden" wire:model="orchard_id">--}}

                                            <div class="flex justify-between">
                                                <div class="">
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Fecha</h3>
                                                        <div class=" ">
                                                            <input type="date" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Fecha" wire:model="date">
                                                        </div>
                                                        @error('date') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Comentario</h3>
                                                        <div class=" ">
                                                            <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Comentarios" wire:model="comments">
                                                        </div>
                                                        @error('comments') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-100 sm:px-6 flex justify-center">
                                    <span class=" bg-red-700 mt-3 flex  rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                        <button wire:click="closeModalPopover()" {{--wire:click="closemodalfenofase()"--}} type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-600 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                            Cerrar
                                        </button>
                                    </span>
                                    <span class="px-7"></span>
                                    <span class="bg-green-700 hover:bg- text-white font-bold flex   rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2  text-base leading-6 font-bold text-white shadow-sm  hover:bg-green-800 focus:outline-none focus:border-green-900 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                            Guardar
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
