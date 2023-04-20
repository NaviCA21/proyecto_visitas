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
                    @extends('layouts.app')

                    @section('content')
                        <div class="container">
                            <h1>{{ __('Create User') }}</h1>

                            <form method="POST" action="{{ route('admin') }}">
                                @csrf

                                <div>
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required
                                        autofocus>
                                </div>

                                <div>
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        required>
                                </div>

                                <div>
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" name="password" required>
                                </div>

                                <div>
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" name="password_confirmation" required>
                                </div>

                                {{-- <div>
                                    <label for="role">{{ __('Role') }}</label>
                                    <select id="role" name="role" required>
                                        <option value="user">{{ __('User') }}</option>
                                        <option value="admin">{{ __('Admin') }}</option>
                                    </select>
                                </div> --}}

                                <div>
                                    <button type="submit">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endsection





                </div>
            </div>
        </div>
    </div>
</x-app-layout>
