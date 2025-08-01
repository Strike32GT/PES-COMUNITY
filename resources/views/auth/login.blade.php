<x-guest-layout>
    <div class="bg-[#0f1535] rounded-2xl shadow-lg p-10 w-full max-w-md text-white">
        <div class="text-center mb-6">
            <img src="{{ asset('images/Pes_Comunity.png') }}" alt="PES Community Logo" class="mx-auto w-40 h-40">
            <p class="text-2xl font-semibold -mt-6">Login</p>
        </div>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-white">Usuario</label>
                <input id="email" type="email" name="email" placeholder="Introduce tu usuario" class="mt-1 block w-full rounded-md bg-[#1b2141] border-0 text-white placeholder-gray-400 focus:ring-2 focus:ring-orange-500" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-white">Contraseña</label>
                <input id="password" type="password" name="password" placeholder="Introduce tu contraseña" class="mt-1 block w-full rounded-md bg-[#1b2141] border-0 text-white placeholder-gray-400 focus:ring-2 focus:ring-orange-500" required>
            </div>

            <div class="flex items-center justify-between mb-6">
                <label class="inline-flex items-center text-sm text-gray-300">
                    <input type="checkbox" name="remember" class="form-checkbox text-orange-500 bg-gray-800 border-gray-700">
                    <span class="ml-2">Recordarme</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-orange-400 hover:text-orange-600">¿Olvidaste la contraseña?</a>
                @endif
            </div>

            <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg transition">
                Iniciar Sesión
            </button>
        </form>

            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="inline-block text-sm text-orange-400 hover:text-orange-600">
            ¿No tienes una cuenta? <span class="underline">Crear una cuenta</span>
                </a>
            </div>
    </div>
</x-guest-layout>
