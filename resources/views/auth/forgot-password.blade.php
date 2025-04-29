<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-white text-center">
            {{ __('Por el momento no se puede utilizar el restablecimiento de la contraseña, por favor comunícate con el administrador.') }}
            <u class="text-xl"><a href="mailto:administrator@tecmoneda.ml?Subject=Recuperación%20de%20contraseña"><b style="color: RGB(212, 155, 60);">administrator@tecmoneda.ml</b></a></u>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('welcome') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo')" />

                <x-input readonly="true" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus />
            </div>

            <div class="flex items-center justify-center mt-4 ">
                <x-button>
                    {{ __('Volver al inicio') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
