<x-guest-layout>
    <x-header-canvas />

    <div class="mx-auto maxdiv-w-lg">
    <x-authentication-card class="w-80">

        <div>
            <x-slot name="logo">
                <div class="flex justify-end">
                    <div class="py-2">
                        <img class="w-20" src="{{ asset('img/logo.png') }}">
                    </div>
                </div>
            </x-slot>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf


                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
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

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex flex-col justify-center items-center mt-4">
                    <x-button-canvas class="my-2">
                        {{ __('Register') }}
                    </x-button-canvas>

                    <a class="underline text-sm text-secondary hover:text-secondaryHoover rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </div>
    </x-authentication-card>
</div>
</x-guest-layout>
