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
                    <div class="flex items-center">

                    {{-- buscar --}}
                    <div class="flex flex-row justify-between items-center w-1/2">
                        <div class="flex items-center flex-grow">
                            <form class="flex w-full max-w-md space-x-5">
                                <div class="relative flex-grow">
                                    <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500 leading-tight" type="text" placeholder="Buscar por nombre, apellido o asunto..." style="text-indent: 0;">
                                    <span id="search-icon" class="absolute top-0 right-0 h-full w-10 text-center text-gray-600 cursor-pointer flex items-center justify-center"><i class="fas fa-search"></i></span>
                                </div>
                            </form>
                        </div>
                        <div></div>
                    </div>

                    <script>
                        const searchIcon = document.getElementById('search-icon');
                        const searchInput = document.querySelector('input[type="text"]');

                        searchIcon.addEventListener('click', () => {
                            const searchTerm = searchInput.value;
                            // Aquí puedes ejecutar tu lógica de búsqueda utilizando el término de búsqueda "searchTerm"
                            console.log(searchTerm);
                        });
                    </script>
                    <input type="date" id="filter-date" onchange="filterByDate()">

                    <script>
                      function filterByDate() {
                        const filterDate = document.getElementById('filter-date').value;
                        // Aquí puedes ejecutar tu lógica de búsqueda utilizando la fecha "filterDate"
                        console.log(filterDate);
                      }
                    </script>



                        <div class="ml-auto">
                            <a href="{{route('visita.create')}}" class="px-4 py-2 font-bold text-white bg-blue-700 rounded hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                                Registrar
                            </a>
                        </div>
                        </div>
                    </div>


            </div>


            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                  <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                      <th class="py-3 px-6 text-left">Fecha</th>
                      <th class="py-3 px-6 text-left">Visitante</th>
                      <th class="py-3 px-6 text-left">DNI</th>
                      <th class="py-3 px-6 text-left">Institucion</th>
                      <th class="py-3 px-6 text-left">Telefono</th>
                      <th class="py-3 px-6 text-left">Hora de ingreso</th>
                      <th class="py-3 px-6 text-left">Hora de salida</th>
                      <th class="py-3 px-6 text-left">N° Visitantes</th>
                      <th class="py-3 px-6 text-left">Asunto</th>
                      <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($visita as $item)
                      <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-2 text-left">{{ $item->periodo->fecha}}</td>
                        <td class="py-3 px-2 text-left whitespace-nowrap">{{ $item->visitante->nombre}} {{ $item->visitante->a_paterno}} {{ $item->visitante->a_materno}}</td>
                        <td class="py-3 px-2 text-left">{{ $item->visitante->dni}}</td>
                        <td class="py-3 px-2 text-left">{{ $item->visitante->institucion}}</td>
                        <td class="py-3 px-2 text-left">{{ $item->visitante->telefono }}</td>
                        <td class="py-3 px-2 text-left">{{ $item->periodo->hora_inicio}}</td>
                        <td class="py-3 px-2 text-left">{{ $item->periodo->hora_fin}}</td>
                        <td class="py-3 px-2 text-left">{{ $item->visitante->num_visitantes}}</td>
                        <td class="py-3 px-2 text-left">{{ $item->asunto}}</td>
                        <td class="py-3 px-2 text-center">
                          <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-5">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="#" class="text-red-600 hover:text-red-900 mr-5">
                            <i class="fas fa-trash-alt"></i>
                          </a>
                          <a href="#" class="text-green-600 hover:text-green-900">
                            <i class="fa-solid fa-check-to-slot"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
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
