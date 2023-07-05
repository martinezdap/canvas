<div x-data>

    <p class="text-grayP mb-4">
        <span class="font-semibold text-lg">Stock disponible:</span> ({{ $quantity }})
    </p>

    <div class="flex items-center">

        <div class="mr-4">
            <x-secondary-button
                disabled
                x-bind:disabled="$wire.qty <= 1"
                wire:loading.attr=disabled
                wire:target="decrement"
                wire:click="decrement">
                -
            </x-secondary-button>
            <span class="mx-2 text-grayP">{{ $qty }}</span>
            <x-secondary-button
                x-bind:disabled="$wire.qty >= {{$quantity}}"
                wire:loading.attr=disabled
                wire:target="decrement"
                wire:click="increment">
                +
            </x-secondary-button>
        </div>

        <div class="flex-1 h-full">
            <x-button-2-canvas 
            x-bind:disabled="$wire.qty > {{$quantity}}"
            wire:click="addItem" {{--}}Indicamos que cuando se hace click se realiza esta funcion declarada en el controlador{{--}}
            wire:loading.attr="disabled" {{--}} Le indicamos al boton que este deshabilitado cuando se este ejecutando la funcion {{--}}
            wire:target="addItem" {{--}} Por ultimo le indicamos que se deshabilitara la funcion addItem {{--}}
            color="secondary" 
            class="w-full h-full">
                Agregar al carrito de compras
            </x-button-2-canvas>
        </div>

    </div>
</div>
