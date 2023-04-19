<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SISTEMA DE VISITAS') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Visitante
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        DNI 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Entidad del visitado
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        telefono  
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Numero de visitantes  
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Hora ingreso
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Hora salida 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Asunto
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Opciones
                                    </th>
                                </tr>
                                
                            </thead>
                            @foreach ($visita as $item)
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $item->visitante->nombre}} {{ $item->visitante->a_paterno}} {{ $item->visitante->a_materno}} 

                                        </th>

                                        <td class="px-6 py-4">
                                            {{ $item->visitante->dni}} 
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->visitante->institucion}}    
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->visitante->telefono }}    
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->visitante->num_visitantes}}    
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $item->periodo->hora_inicio}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->periodo->hora_fin}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->periodo->fecha}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->asunto}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</button>
                                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Eliminar</button>
                                                
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                            
                        </table>
                    </div>

                    <br>
                        <a href="{{route('visita.create')}}" class="ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Registrar</a>
                    </br>
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
