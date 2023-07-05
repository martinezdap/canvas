<style>
    .flex-direction-nav .flex-prev {
        opacity: 1;
        position: absolute;
        top: 50%;
        margin-top: -80px;
        left: 10px;
        /* Ajusta la posición horizontal según tu diseño */
        cursor: pointer;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
        z-index: 9999;
        /* Asegura que las flechas estén por encima de la imagen */
    }

    .flex-direction-nav .flex-next {
        opacity: 1;
        position: absolute;
        top: 50%;
        margin-top: -80px;
        right: 10px;
        /* Ajusta la posición horizontal según tu diseño */
        cursor: pointer;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
        z-index: 9999;
        /* Asegura que las flechas estén por encima de la imagen */
    }

    .flex-direction-nav .flex-prev:hover,
    .flex-direction-nav .flex-next:hover {
        background: none;
        /* Elimina el fondo en el hover */
    }
</style>

<x-app-layout>
    <div class="container">
        <div class="grid grid-cols-2 gap-6 py-8">
            <div>
                <div class="flexslider">
                    <ul class="slides">

                        @foreach ($product->images as $image)
                            <li data-thumb="{{ Storage::url($image->url) }}">
                                <img src="{{ Storage::url($image->url) }}" />
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div>

                <h1 class="text-lg font-bold text-blackCanvas">{{ $product->name }}</h1>

                <div class="flex">
                    <p class="text-grayP">Marca: <a class="capitalize underline hover:text-secondary"
                            href="">{{ $product->brand->name }}</a></p>
                    <p></p>
                </div>

                <div>
                    <p class="text-2xl text-blackCanvas my-4">${{ $product->price }}</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm mb-6">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-greenCanvas">
                            <i class="fas fa-truck text-sm text-whiteCanvas"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-greenCanvas">Envios a todo Santiago del estero</p>
                            <p>Llega aproximadamente el <span
                                    class="text-greenCanvas">{{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                @if ($product->category->size)
                    @livewire('add-cart-item-size', ['product' => $product])
                @elseif($product->category->color)
                    @livewire('add-cart-item-color', ['product' => $product])
                @else
                    @livewire('add-cart-item', ['product' => $product])
                @endif

            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush

</x-app-layout>
