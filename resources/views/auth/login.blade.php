<x-guest-layout class="relative">

    <x-header-canvas />

    <div class="mx-auto maxdiv-w-lg">
        <x-authentication-card>

            <x-slot name="logo">
                <div class="flex flex-col justify-center items-center">
                    <div class="py-8">
                        <img class="w-48" src="{{ asset('img/logo.png') }}">
                    </div>
                </div>
            </x-slot>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-lg text-whiteCanvas">
                    {{ session('status') }}
                    <i class="fa-solid fa-check"></i>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                </div>

                <div class="mt-4" x-data="{ show: false }">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <div class="relative">
                        <x-input id="password" class="block mt-1 w-full" x-bind:type="show ? 'text' : 'password'"
                            name="password" required autocomplete="current-password" />

                        <div class="absolute top-3 right-2 text-grayP">
                            {{-- Show password --}}
                            <button type="button" @click="show = !show" :class="{ 'hidden': show, 'block': !show }">
                                <i class="fa-sharp fa-solid fa-eye text-lg"></i>
                            </button>

                            {{-- Hide password --}}
                            <button type="button" @click="show = !show" :class="{ 'hidden': !show, 'block': show }">
                                <i class="fa-solid fa-eye-slash text-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-grayP">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex flex-col justify-center items-center mt-4">
                    <x-button-canvas class="mb-2">
                        {{ __('Log in') }}
                    </x-button-canvas>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-secondary hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </x-authentication-card>

        <div class="py-2 flex justify-center items-center">
            <p class="text-grayP">¿Aún no tenés cuenta?</p>
            <a href="{{ route('register') }}" class="ml-2 font-semibold text-secondary">Crear cuenta.</a>
        </div>
    </div>
</x-guest-layout>
