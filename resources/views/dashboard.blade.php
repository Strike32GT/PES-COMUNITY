<x-app-layout :useSidebar="true">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 px-4 sm:px-6 lg:px-8 bg-[#0b1120] text-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-[#131c31] p-6 rounded-lg shadow text-center">
                
                <h3 class="text-lg font-semibold">
                    Total de Juegos
                </h3>

                <p class="text-3xl font-bold mt-2">
                    {{ $total_juegos }}
                </p>

                <p class="text-sm mt-1">
                    Total de Juegos
                </p>

            </div>


            <div class="bg-[#131c31] p-6 rounded-lg shadow text-center">
                <h3 class="text-3xl font-bold mt-2">15,842</h3>
                <p class="text-sm mt-1">Total de Juegos</p>
            </div>

            <div class="bg-[#131c31] p-6 rounded-lg shadow text-center">
                <h3 class="text-lg font-semibold">Usuarios Activos</h3>
                <p class="text-3xl font-bold mt-2">3,456</p>
                <p class="text-sm mt-1">Total de Juegos</p>
            </div>

        </div>


        <div class="bg-[#131c31] p-6 rounded-lg shadow mb-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Actividad reciente</h3>
                <a href="#" class="text-sm text-blue-400 hover:underline">Ver Todo</a>
            </div>
            <table class="w-full text-left text-sm">
                <thead class="border-b border-gray-700">
                    <tr>
                        <th class="py-2">Acción</th>
                        <th class="py-2">Usuario</th>
                        <th class="py-2">Fecha</th>   
                        <th class="py-2">Estado</th>   
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-800">
                        <td class="py-2">Descarga Pes2020</td>
                        <td class="py-2">Llantero</td>
                        <td class="py-2">Hace 2 horas</td>
                        <td class="py-2">Completado</td>
                    </tr>

                    <tr class="border-b border-gray-800">
                        <td class="py-2">Nuevo Registro</td>
                        <td class="py-2">fan_konami</td>
                        <td class="py-2">Hace 4 horas</td>
                        <td class="py-2">Activo</td>
                    </tr>

                    <tr>
                        <td class="py-2">Descarga 6 plus</td>
                        <td class="py-2">Bozin</td>
                        <td class="py-2">Hace 6 horas</td>
                        <td class="py-2">Pendiente</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-end">
            <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg font-semibold">
                + Agregar Juego
            </a>
        </div>
    </div>
</x-app-layout>
