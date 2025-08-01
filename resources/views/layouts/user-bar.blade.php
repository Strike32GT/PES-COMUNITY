<nav class="bg-gray-800 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="flex items-center justify-between py-2">
            {{-- Sección Izquierda: Logo + Enlaces --}}
            <div class="flex items-center space-x-10">
                {{-- Logo --}}
                <a href="{{ route('dashboard') }}" class="text-xl font-bold text-orange-400">
                    <img src="{{ asset('images/Pes_Comunity.png') }}" alt="PES-COMUNITY" class="h-20">
                </a>

                {{-- Enlaces de navegación --}}
                <div class="hidden sm:flex space-x-6">
                    <a href="{{ route('dashboard') }}" class="hover:text-orange-400">Inicio</a>
                    <a href="{{ route('sagas.index') }}" class="hover:text-orange-400">Juegos PES</a>
                    <a href="{{ route('soundtracks.index') }}" class="hover:text-orange-400">Soundtracks</a>
                    <a href="#" class="hover:text-orange-400">DLC</a>
                </div>
            </div>

            {{-- Sección Derecha: Usuario --}}
            <div class="hidden sm:flex items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path d="M5.516 7.548L10 12.032l4.484-4.484-1.06-1.06L10 9.91 6.576 6.488z" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('profile.show') }}">
                            Perfil
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Cerrar sesión
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
