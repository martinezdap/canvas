<div>
    <x-dropdown width="96">

        <x-slot name="trigger">
            <x-cart />
        </x-slot>

        <x-slot name="content">

            <ul>
                @forelse (Cart::content() as $item)
                    <li class="flex p-2 border-b border-grayCanvas">
                        <img class="h15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                        <article class="flex-1">
                            <h1 class="font-bold">{{ $item->name }}</h1>

                            <div class="flex">
                                <p>Cant: {{ $item->qty }}</p>

                                @isset($item->options['color'])
                                    <p class="mx-2">- Color: {{ __($item->options['color']) }}</p>
                                @endisset

                                @isset($item->options['size'])
                                    <p class="mx-2">{{ __($item->options['size']) }}</p>
                                @endisset
                            </div>

                            <p>ARS ${{ $item->price }}</p>
                        </article>
                    </li>
                @empty
                    <li class="py-6 px-4">
                        <p class="text-center text-grayP">
                            No tiene agregado ningún item en el carrito
                        </p>
                    </li>
                @endforelse
            </ul>

            @if (Cart::count())
                <div class="py-2 px-3">
                    <p class="text-lg text-gray-700 mt-2 mb-3"><span class="font-bold">Total:</span> ARS
                        {{ Cart::subtotal() }}</p>
                        <a href="{{route('shopping-cart')}}">
                            <x-button-enlace color="secondary" class="w-full">
                                Ir al carrito de compras
                            </x-button-enlace>
                        </a>
                </div>
            @else
            @endif

        </x-slot>
    </x-dropdown>
</div>
