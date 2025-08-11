<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Gestion de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gradient-to-b from-blue-900 to-indigo-900 text-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Encabezado -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Lista de Usuarios</h1>
                <a href="{{ route('usuarios.create') }}"
                   class="bg-gradient-to-r from-indigo-500 to-blue-600 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-full shadow transition-all">
                    + Nuevo Usuario
                </a>
            </div>

            <!-- Tabla -->
            <div class="overflow-x-auto rounded-lg shadow-lg border border-gray-700">
                <table class="min-w-full divide-y divide-gray-700">
                    <thead class="bg-[#0b1120]">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Apellido</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Rol</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Fecha de Creación</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-400 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-700">
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->idusuario }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->apellido }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->rol }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->fecha_Creacion }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center flex justify-center gap-2">

                                    <!-- Botón Editar -->
                                    <a href="{{ route('usuarios.edit', $usuario->idusuario) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-full text-sm shadow">
                                        Editar
                                    </a>

                                    <!-- Botón Eliminar -->
                                    <form action="{{ route('usuarios.destroy', $usuario->idusuario) }}" method="POST"
                                          onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-full text-sm shadow">
                                            Eliminar
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="mt-6">
                {{ $usuarios->links() }} 
            </div>
        </div>
    </div>
</x-app-layout>
