<div x-data>
    <p class="text-lg text-blackCanvas mb-1">Color:</p>

    <select wire:model="color_id" class="form-control w-full capitalize">
        <option value="" selected disabled class="">Seleccionar un color</option>

        @foreach ($colors as $color)
            <option value="{{ $color->id }}" class="capitalize">{{ __($color->name) }}</option>
        @endforeach
    </select>

    <p class="text-grayP my-4">
        <span class="font-semibold text-lg">Stock disponible:</span>
        @if ($quantity)
            ({{ $quantity }})
        @else
            ({{ $product->stock }})
        @endif
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
            wire:click="addItem"
            wire:loading.attr="disabled" 
            wire:target="addItem"
            x-bind:disabled="!$wire.quantity"
            color="secondary"
            class="w-full h-full">Agregar al carrito de compras</x-button-2-canvas>
        </div>

    </div>
</div>