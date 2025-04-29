<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo />
            <div class="text-center" style="margin-top: 10px;">
                <a href="/">
                    <i class="fa fa-arrow-circle-left fa-2x arrow" style="color: #fff; cursor: pointer;">
                    </i>
                </a>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-3" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-3" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div style="position: relative;">
                <x-label for="email" :value="__('Correo')" />

                <x-input style="padding-left: 32px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <i class="fa fa-envelope" style=" color: #000c42; position: absolute; left: 10px; top: 35px;"></i>
            </div>

            <!-- Password -->
            <div class="mt-3" style="position: relative;">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input style="padding-left: 32px;" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <div style="position: absolute; right: 10px; top: 32px;">
                    <button id="show_password" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                </div>
                <i class="fa fa-key" style="color: #000c42; position: absolute; left: 10px; top: 35px;"></i>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-white">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-400" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
                <x-button class="ml-3">
                    {{ __('Ingresar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
