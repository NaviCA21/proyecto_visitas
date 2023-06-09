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

                        <div class="ml-auto">
                            <a href="{{route('register.create')}}" class="px-4 py-2 font-bold text-white bg-blue-700 rounded hover:bg-blue-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                                Crear Nuevo Usuario
                            </a>
                        </div>
                        </div>
                    </div>


            </div>


            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                  <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                      <th class="py-3 px-6 text-left">Nombre del usuario</th>
                      <th class="py-3 px-6 text-left">Cargo</th>
                      <th class="py-3 px-6 text-left">Email</th>
                      {{-- <th class="py-3 px-6 text-left">Contraceña</th> --}}
                      <th class="py-3 px-6 text-left">Tipo de usuario</th>
                      <th class="py-3 px-6 text-left">Fecha de creacion</th>
                      <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                  </thead>

                      <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($user as $item)
                          <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-2 text-left">{{ $item->name}}</td>
                            <td class="py-3 px-2 text-left">{{ $item->cargo}}</td>
                            <td class="py-3 px-2 text-left">{{ $item->email}}</td>
                            {{-- <td class="py-3 px-2 text-left">{{ $item->password}}</td> --}}
                            <td class="py-3 px-2 text-left">{{ $item->tipo_usuario->tipo_usuario}}</td>
                            <td class="py-3 px-2 text-left">{{ $item->created_at}}</td>
                            <td class="py-3 px-2 text-center">
                            {{-- <form action="#" method="POST">
                                @csrf
                                @method('UPDATE')
                                <button class="text-indigo-600 hover:text-indigo-900 mr-5">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form> --}}

                            <<div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary mr-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('user.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mr-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>




                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
