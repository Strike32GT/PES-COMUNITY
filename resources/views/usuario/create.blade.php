<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Crear Nuevo Usuario') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gradient-to-b from-blue-900 to-indigo-900 text-white min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Tarjeta -->
            <div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 p-6">
                <h1 class="text-2xl font-bold mb-6">Registrar Usuario</h1>

                <!-- Mensajes de validación -->
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-3 rounded mb-4">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Formulario -->
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf

                    <!-- Nombre -->
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-300 mb-1">Nombre</label>
                        <input type="text" name="nombre" id="nombre"
                               value="{{ old('nombre') }}"
                               class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>

                    <!-- Apellido -->
                    <div class="mb-4">
                        <label for="apellido" class="block text-sm font-medium text-gray-300 mb-1">Apellido</label>
                        <input type="text" name="apellido" id="apellido"
                               value="{{ old('apellido') }}"
                               class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Correo Electrónico</label>
                        <input type="email" name="email" id="email"
                               value="{{ old('email') }}"
                               class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>

                    <!-- Contraseña -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Contraseña</label>
                        <input type="password" name="password" id="password"
                               class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>

                    <!-- Rol -->
                    <div class="mb-6">
                        <label for="rol" class="block text-sm font-medium text-gray-300 mb-1">Rol</label>
                        <select name="rol" id="rol"
                                class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                            <option value="">-- Selecciona un rol --</option>
                            <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="usuario" {{ old('rol') == 'usuario' ? 'selected' : '' }}>Usuario</option>
                        </select>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end gap-3">
                        <a href="{{ route('usuarios.list') }}"
                           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-full shadow transition-all">
                            Cancelar
                        </a>
                        <button type="submit"
                                class="bg-gradient-to-r from-indigo-500 to-blue-600 hover:opacity-90 text-white font-semibold px-4 py-2 rounded-full shadow transition-all">
                            Guardar Usuario
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
