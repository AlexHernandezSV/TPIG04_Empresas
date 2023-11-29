<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ofertas') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Crear nueva oferta de servicio social") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{route('ofertas.store')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="carreras_solicitadas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carreras solicitadas</label>
                                <x-text-input id="carreras_solicitadas" name="carreras_solicitadas" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('carreras_solicitadas')" required autofocus autocomplete="carreras_solicitadas" />
                                <x-input-error :messages="$errors->get('carreras_solicitadas')" class="mt-2" />
                            </div>
                            <div>
                                <label for="cantidad_estudiantes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad_estudiantes</label>
                                <x-text-input id="cantidad_estudiantes" name="cantidad_estudiantes" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('cantidad_estudiantes')" required autofocus autocomplete="cantidad_estudiantes" />
                                <x-input-error :messages="$errors->get('cantidad_estudiantes')" class="mt-2" />
                            </div>
                            <div>
                                <label for="puesto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
                                <x-text-input id="puesto" name="puesto" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('puesto')" required autofocus autocomplete="puesto" />
                                <x-input-error :messages="$errors->get('puesto')" class="mt-2" />
                            </div>
                            <div>
                                <label for="salario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario</label>
                                <x-text-input id="salario" name="salario" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('salario')" required autofocus autocomplete="salario" />
                                <x-input-error :messages="$errors->get('salario')" class="mt-2" />
                            </div>

                            <div>
                                <label for="fecha_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de inicio</label>
                                <x-text-input id="fecha_inicio" name="fecha_inicio" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('fecha_inicio')" required autofocus autocomplete="fecha_inicio" />
                                <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
                            </div>

                            <div>
                                <label for="fecha_fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de fin</label>
                                <x-text-input id="fecha_fin" name="fecha_fin" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('fecha_fin')" required autofocus autocomplete="fecha_fin" />
                                <x-input-error :messages="$errors->get('fecha_fin')" class="mt-2" />
                            </div>

                            <div>
                                <label for="fecha_max_aplicar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha maxima de aplicar</label>
                                <x-text-input id="fecha_max_aplicar" name="fecha_max_aplicar" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('fecha_max_aplicar')" required autofocus autocomplete="fecha_max_aplicar" />
                                <x-input-error :messages="$errors->get('fecha_max_aplicar')" class="mt-2" />
                            </div>

                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion del proyecto</label>
                                <x-text-input id="descripcion_proyecto" name="descripcion_proyecto" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('descripcion_proyecto')" required autofocus autocomplete="descripcion_proyecto" />
                                <x-input-error :messages="$errors->get('descripcion_proyecto')" class="mt-2" />
                            </div>
                        </div>

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar</button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>