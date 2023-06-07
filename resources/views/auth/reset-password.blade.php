<x-guest-layout>

    <x-header-canvas class="z-40"/>

    <x-authentication-card>
        <x-slot name="logo">
            <div class="flex flex-col justify-center items-center">
                <div class="py-8">
                    <img class="w-48" src="{{ asset('img/logo.png') }}">
                </div>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
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



            <div class="mt-4" x-data="{ show: false }">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <div class="relative">
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                        x-bind:type="show ? 'text' : 'password'" name="password_confirmation" required
                        autocomplete="new-password" />
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

            <div class="flex items-center justify-center mt-4">
                <x-button-canvas>
                    {{ __('Reset Password') }}
                </x-button-canvas>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
