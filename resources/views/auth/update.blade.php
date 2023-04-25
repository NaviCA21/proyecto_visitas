<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SISTEMA DE VISITAS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-1/2 mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Name -->

                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Nombre del usuario')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" autofocus/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <!-- Cargo -->
                        <div class="mt-4">
                            <x-input-label for="cargo" :value="__('Cargo')" />
                            <x-text-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" value="{{$user->cargo}}" autofocus/>
                            <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Correo del usuario')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" autofocus/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>


                        <!-- Tipo Usuario -->

                        <div class="mt-4">
                            <x-input-label  :value="__('Tipo de Usuario')" />
                            <select id="tipo_usuario" name="tipo_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled selected>Seleccionar..</option>
                                @foreach($tipo_usuario as $tipo_usuario)
                                    <option value="{{ $tipo_usuario->id }}">{{ $tipo_usuario->tipo_usuario }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Contraceña')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"/>

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('admin.admin') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Regresar</a>
                            <x-primary-button class="ml-4">
                                {{ __('Actualizar') }}
                            </x-primary-button>
                        </div>

                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
