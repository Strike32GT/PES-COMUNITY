<aside class="w-64 min-h-screen bg-[#0b1120] text-white p-4 space-y-6">
    <div>
        <p class="text-sm font-semibold text-gray-400 uppercase">Principal</p>
        <ul class="space-y-2 mt-2">
            <li><a href="{{ route('dashboard') }}" class="hover:text-orange-400">📊 Dashboard</a></li>
            <li><a href="#" class="hover:text-orange-400">📈 Analíticas</a></li>
        </ul>
    </div>

    <div>
        <p class="text-sm font-semibold text-gray-400 uppercase">Contenido</p>
        <ul class="space-y-2 mt-2">
            <li><a href="#" class="hover:text-orange-400">🎮 Gestión de Juegos</a></li>
            <li><a href="#" class="hover:text-orange-400">⬇️ Descargas</a></li>
            <li><a href="#" class="hover:text-orange-400">🎵 Soundtracks</a></li>
        </ul>
    </div>

    <div>
        <p class="text-sm font-semibold text-gray-400 uppercase">Usuarios</p>
        <ul class="space-y-2 mt-2">
            <li><a href="{{ route('usuarios.list') }}" class="hover:text-orange-400">👤 Usuarios</a></li>
        </ul>
    </div>

    <div>
        <p class="text-sm font-semibold text-gray-400 uppercase">Sistema</p>
        <ul class="space-y-2 mt-2">
            <li><a href="#" class="hover:text-orange-400">⚙️ Configuración</a></li>
        </ul>
    </div>
</aside>
