<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SISTEMA DE VISITAS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('visita.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Registrar</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Modal  --}}


                    {{-- Cerrar modal --}}
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Entidad visitada
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Visistante
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Documento del visitante
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Entidad visitada 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Funcionario visitado
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Hora ingreso
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Hora salida 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Motivo
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($visita as $item)
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->asunto }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->visitante->nombre }} {{ $item->visitante->a_paterno }}
                                            {{ $item->visitante->a_materno }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->periodo->fecha }}
                                        </td>
                                        <td class="px-6 py-4">
                                            Editar/Eliminar
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>

                    {{-- <ul>@foreach ($visita as $visitas)
                    <li>{{$visitas->asunto}}</li>
                    <li>{{$visitas->visitante->nombre}}</li>
                    <li>{{$visitas->visitante->a_paterno}}</li>
                    <li>{{$visitas->periodo->fecha}}</li>
                   @endforeach</ul> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
