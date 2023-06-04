<header class="bg-primary sticky top-0" style="z-index: 1000" x-data="dropdown()">
    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a
        x-on:click="show()" :class="{ '!text-secondary !bg-whiteCanvas': open }"
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
    <nav id="navigation-menu" 
    x-cloak x-show="open"
    class="bg-grayP bg-opacity-25 w-full absolute">
        <div class="container h-full">
            <div
            x-on:click.away="close()"
            class="grid grid-cols-4 h-full relative">
                <ul class="bg-whiteCanvas">
                    <li class="text-grayP hover:bg-primary hover:text-secondary">
                        <a href="" class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9"><i class="fa-solid fa-star"></i></span> Destacados</a>
                    </li>
                    <li class="text-grayP hover:bg-primary hover:text-secondary">
                        <a href="" class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9"><i class="fa-solid fa-scissors"></i></span> Turnos de peluqueria canina</a>
                    </li>
                    <li class="text-grayP hover:bg-primary hover:text-secondary">
                        <a href="" class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9"><i class="fa-solid fa-people-group"></i></span> Sobre nosotros</a>
                    </li>
                    <li class="text-grayP hover:bg-primary hover:text-secondary">
                        <a href="" class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9"><i class="fa-solid fa-paw-simple"></i><i class="fa-sharp fa-solid fa-conveyor-belt-empty"></i><i class="fa-solid fa-circle-question"></i></span> Ayuda</a>
                    </li>

                </ul>

                <div class="col-span-1 bg-grayCanvas py-4 px-4">
                    <p class="text-secondaryHoover text-lg px-4 font-bold text-center">Productos</p>
                    <ul>
                        @foreach ($categories as $category)
                        <li class="navigation-link text-grayP hover:text-secondary">
                            <a href="" class="py-2 px-4 flex items-center">
                                <span class="flex justify-center w-9">{!!$category->icon!!}</span>
                                {{ $category->name }}
                            </a>

                            <div class="navigation-submenu bg-grayCanvas absolute w-2/4 top-0 right-0 h-full hidden py-4 px-4">
                                <img class="h-64 w-full object-cover object-center" src="{{Storage::url($category->image)}}" alt="">
                            </div>

                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-span-2 bg-grayCanvas py-4 px-4">
                    <img class="h-64 w-full object-cover object-center" src="{{Storage::url($categories->first()->image)}}" alt="">
                </div>

            </div>
        </div>
    </nav>
</header>

