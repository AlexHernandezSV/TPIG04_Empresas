<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Postulados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Postulados a la oferta") }}
                </div>
                <div class="p-1 text-gray-900 dark:text-gray-100">
                    <div class="md:w-[100%] w-auto p-4 mx-auto bg-slate-50 dark:bg-gray-800 shadow rounded-md overflow-auto">
                        <table class="table w-full max-h-screen rounded-md">
                            <thead class="border-b bg-slate-100 dark:bg-gray-700">
                                <tr class="text-center">
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">ID</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Nombre</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Apellidos</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Carrera</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Telefono</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Email</th>
                                    <th class="px-6 py-4 text-xs text-gray-500 font-semibold">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($postfact) && is_array($postfact))
                                @foreach($postfact as $apicurriculum)
                                <tr class="border-b">
                                    <td class="text-center p-1">{{ $apicurriculum['id'] }}</td>
                                    <td class="text-center p-1">{{ $apicurriculum['first_name'] }}</td>
                                    <td class="text-center p-1">{{ $apicurriculum['last_name'] }}</td>
                                    <td class="text-center p-1">{{ $apicurriculum['carrera'] }}</td>
                                    <td class="text-center p-1">{{ $apicurriculum['telefono'] }}</td>
                                    <td class="text-center p-1">{{ $apicurriculum['email'] }}</td>
                                    <td class="text-center p-1">
                                        <a href="{{ route('postulados.revisar', $apicurriculum['id']) }}">
                                            <button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Revisar</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-sm text-gray-500">No hay datos disponibles</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>