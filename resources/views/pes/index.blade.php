<x-user-layout>
    <x-slot name="header">
        {{--
        <h2 class="font-semibold text-xl text-white leading-tight text-center">
            {{ __('') }}
        </h2>
        esto es por si quieres agregar algo debajo de los links como Inicio Juego Pes y Soundtracks--}}
    </x-slot>

    <div class="py-8 bg-gradient-to-b from-blue-900 to-indigo-900 text-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <img src="{{ asset('images/Pes_Comunity.png') }}" alt=""
                    class="mx-auto h-64 sm:h-72 md:h-80 mb-0 leading-none">
                <p class="text-lg text-orange-400">El legado de Konami en el fútbol digital</p>
                <a href="#archivo"
                    class="mt-6 inline-block bg-orange-400 hover:bg-orange-500 text-white font-semibold py-3 px-6 rounded-full transition">
                    Empezar a Explorar
                </a>
            </div>

            <h2 id="archivo" class="text-3xl font-bold text-center mb-10">Archivo Histórico</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($peslist as $pes)
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg relative">
                    <div class="relative">
                        <img src="{{ $pes->link_imagen }}" alt="" class="w-full h-28 object-cover">
                        <span
                            class="absolute top-4 right-4 bg-orange-400 text-black font-bold text-sm px-3 py-1 rounded-full">
                            {{ \Carbon\Carbon::parse($pes->fecha_lanzamiento)->format('Y') }}
                        </span>
                    </div>

                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">{{ $pes->Nombre }}</h3>

                        <div class="flex gap-1 mb-3">
                            @for ($i = 0; $i < intval($pes->valoracion); $i++)
                                <span>⭐</span>
                                @endfor
                        </div>

                        <p class="text-sm text-gray-300 mb-4">
                            {{ Str::limit($pes->descripcion, 150) }}
                        </p>

                        <div class="flex justify-between items-center gap-2">
                            <a href="{{ Str::replace('/upload/', '/upload/fl_attachment/'   ,$pes->link_descarga) }}" target="_blank"
                                class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-3 py-1 rounded shadow" download>
                                Descargar
                            </a>
                            <a href="{{ route('sagas.soundtracks', $pes->idpes) }}"
                                class="bg-gray-600 hover:bg-gray-700 text-white text-sm px-3 py-1 rounded shadow">
                                Soundtrack
                            </a>

                            <a href="#"
                                class="bg-gray-600 hover:bg-gray-700 text-white text-sm px-3 py-1 rounded shadow">
                                Detalles
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-user-layout>