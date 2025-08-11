<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-md border border-gray-200">
            <form action="{{ route('usuarios.update', $usuario->idusuario) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nombre -->
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="nombre" id="nombre"
                        value="{{ old('nombre', $usuario->nombre) }}"
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <!-- Apellido -->
                <div class="mb-4">
                    <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                    <input type="text" name="apellido" id="apellido"
                        value="{{ old('apellido', $usuario->apellido) }}"
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input type="email" name="email" id="email"
                        value="{{ old('email', $usuario->email) }}"
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <!-- Rol -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Rol</label>
                    <input type="text"
                        value="{{ $usuario->rol }}" disabled
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
                
                
                <!-- Fecha de Creación -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Fecha de Creación</label>
                    <input type="text"
                        value="{{ $usuario->fecha_Creacion }}" disabled
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>


                <!-- Botones -->
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('usuarios.list') }}"
                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-[#3B5BFE] to-[#5F47FF] hover:opacity-90 text-white font-semibold rounded-lg shadow-md transition">
                        Guardar cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
