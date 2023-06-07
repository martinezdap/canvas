<div x-data>

    <p class="text-grayP">
        <span class="font-semibold text-lg mb-4">Stock disponible:</span> {{ $quantity }}
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
            <x-button-2-canvas color="secondary" class="w-full h-full">Agregar al carrito de compras</x-button-2-canvas>
        </div>

    </div>
</div>
