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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->

                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Nombre del usuario')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Correo del usuario')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Contraceña')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmar contraceña')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- tipo de usuario -->
                        {{-- <div class="mt-4">
                            <x-input-label for="email" :value="__('Tipo de Usuario')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div> --}}
                        <!-- tipo de usuario -->
                        {{-- <div class="form-group">
                            <label for="tipo_usuario">Tipo de Usuario:</label>
                            <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                                @foreach($tipo_usuarios as $tipo_usuario)
                                    <option value="{{ $tipo_usuario->id }}">{{ $tipo_usuario->nombre }}</option>
                                @endforeach
                            </select>
                        </div> --}}






                        <div class="flex items-center justify-end mt-4">

                            <x-primary-button class="ml-4">
                                {{ __('Agregar usuario') }}
                            </x-primary-button>
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
