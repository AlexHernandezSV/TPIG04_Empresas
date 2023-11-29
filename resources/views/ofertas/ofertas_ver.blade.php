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
                    {{ __("Revisar oferta de servicio social") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form disabled>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="carreras_solicitadas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carreras solicitadas</label>
                                <x-text-input id="carreras_solicitadas" name="carreras_solicitadas" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('carreras_solicitadas', $oferta->carreras_solicitadas)" required autofocus autocomplete="carreras_solicitadas" disabled />
                            </div>
                            <div>
                                <label for="cantidad_estudiantes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad_estudiantes</label>
                                <x-text-input id="cantidad_estudiantes" name="cantidad_estudiantes" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('cantidad_estudiantes', $oferta->cantidad_estudiantes)" required autofocus autocomplete="cantidad_estudiantes" disabled />
                            </div>
                            <div>
                                <label for="puesto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
                                <x-text-input id="puesto" name="puesto" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('puesto', $oferta->puesto)" required autofocus autocomplete="puesto" disabled/>
                            </div>
                            <div>
                                <label for="salario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salario</label>
                                <x-text-input id="salario" name="salario" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('salario', $oferta->salario)" required autofocus autocomplete="salario" disabled/>
                            </div>

                            <div>
                                <label for="fecha_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de inicio</label>
                                <x-text-input id="fecha_inicio" name="fecha_inicio" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('fecha_inicio', $oferta->fecha_inicio)" required autofocus autocomplete="fecha_inicio" disabled/>
                            </div>

                            <div>
                                <label for="fecha_fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de fin</label>
                                <x-text-input id="fecha_fin" name="fecha_fin" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('fecha_fin', $oferta->fecha_fin)" required autofocus autocomplete="fecha_fin" disabled/>
                            </div>

                            <div>
                                <label for="fecha_max_aplicar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha maxima de aplicar</label>
                                <x-text-input id="fecha_max_aplicar" name="fecha_max_aplicar" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('fecha_max_aplicar', $oferta->fecha_max_aplicar)" required autofocus autocomplete="fecha_max_aplicar" disabled/>
                            </div>

                            <div>
                                <label for="descripcion_proyecto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion del proyecto</label>
                                <x-text-input id="descripcion_proyecto" name="descripcion_proyecto" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="old('descripcion_proyecto', $oferta->descripcion_proyecto)" required autofocus autocomplete="descripcion_proyecto" disabled/>
                            </div>
                        </div>
                    </form>

                    <a href="/ofertas">
                    <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Regresar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>