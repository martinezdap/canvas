<x-guest-layout>
    <x-header-canvas class="z-40"/>
    <div class="mx-auto maxdiv-w-lg">
    <x-authentication-card>
        <x-slot name="logo">
            <div class="flex flex-col justify-center items-center">
                <div class="py-8">
                    <img class="w-48" src="{{ asset('img/logo.png') }}">
                </div>
            </div>
        </x-slot>

        <div class="mb-4 text-sm text-secondaryHoover">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-lg text-whiteCanvas">
                {{ session('status') }}
                <i class="fa-solid fa-check"></i>
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-center mt-6 w-full">
                <x-button-canvas width="56">
                    {{ __('Email Password Reset Link') }}
                </x-button-canvas>
            </div>
        </form>
    </x-authentication-card>
    </div>
</x-guest-layout>
