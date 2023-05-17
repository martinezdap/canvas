<header class="bg-primary sticky top-0" style="z-index: 1000"">
    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a x-on:click="show()" :class="{ '!text-orange-500 !bg-opacity-100': open }"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-primaryHover bg bg-opacity-25 text-secondary hover:text-white cursor-pointer font-semibold h-full transition ease-in-out duration-150">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-lg hidden md:block">Menú</span>
        </a>

        <div>
            <a href="/">
                <img class="w-20 px-4" src="{{ asset('img/logo.png') }}">
            </a>
        </div>

        @livewire('search')

        <div class="mx-6 relative hidden md:block">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border border-secondary rounded-full focus:outline-none focus:border-secondaryHoover transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-grayP">
                            {{ __('Manage Account') }}
                        </div>

                        <x-dropdown-link href="{{ route('profile.show') }}" class="text-grayP font-semibold hover:bg-grayP hover:bg-opacity-10">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <div class="border-t border-secondary"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                class="text-grayP font-semibold hover:bg-grayP hover:bg-opacity-10">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i
                            class="fas fa-user-circle text-secondary hover:text-white text-3xl cursor-pointer transition ease-in-out duration-150"></i>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('login') }}" class="text-grayP font-semibold hover:bg-grayP hover:bg-opacity-10">
                            {{ __('Login') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('register') }}" class="text-grayP font-semibold hover:bg-grayP hover:bg-opacity-10">
                            {{ __('Register') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            @endauth

        </div>

        @livewire('dropdown-cart')

    </div>
</header>
