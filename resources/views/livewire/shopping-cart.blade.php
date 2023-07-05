<div class="container py-8">
    <section class="bg-whiteCanvas rounded-lg shadow-lg p-6 text-grayP">
        <h1 class="text-lg font-semibold mb-6">CARRITO DE COMPRAS</h1>

        @if (Cart::count())

            <table class="table-auto w-full">
            <thead>
                <tr>
                    <th></th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                @foreach (Cart::content() as $item)
                    <tr>
                        <td>
                            <div class="flex">
                                <img class="h-15 w-20 object-cover mr-4" src="{{$item->options->image}}" alt="">
                                <div>
                                    <p class="font-bold">{{$item->name}}</p>
                                    @if ($item->options->color)
                                        <span>
                                            Color: {{__($item->options->color)}}
                                        </span>
                                    @endif
                                    @if ($item->options->size)
                                        <span class="mx-1">-</span>
                                        <span>
                                            {{$item->options->size}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>

                        <td class = "text-center">
                            <span>ARS {{$item->price}}</span>
                            <a class="ml-6 cursor-pointer hover:text-secondary" wire:click="delete('{{$item->rowId}}')" 
                                wire:loading.class="text-secondary opacity-25"
                                wire:target="delete('{{$item->rowId}}')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>

                        <td>
                            <div class = "flex justify-center">
                                @if($item->options->size)
                                    @livewire('update-cart-item-size', ['rowId' => $item->rowId], key($item->rowId))
                                @elseif($item->options->color)
                                    @livewire('update-cart-item-color', ['rowId' => $item->rowId], key($item->rowId))
                                @else
                                    @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                                @endif
                            </div>
                        </td>

                        <td class = "text-center">
                            ARS {{$item->price*$item->qty}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>

            <a class = "text-sm cursor-pointer hover:underline mt-3 inline-block" wire:click="destroy">
                <i class="fas fa-trash"></i>
                Limpiar el carrito
            </a>
        @else
            <div class = "flex flex-col items-center">
                <x-cart/>
                <p class="text-lg text-grayP mt-4">EL CARRITO DE COMPRAS ESTÁ VACÍO</p>
                <a href="/">
                    <x-button-enlace color="secondary" class="mt-4 px-16">
                        VOLVER AL INICIO
                    </x-button-enlace>
                </a>
            </div>
        @endif
    </section>

    @if(Cart::count())
        <div class = "bg-whiteCanvas rounded-lg shadow-lg px-6 py-4 mt-4">
            <div class = "flex justify-between items-center">
                <div>
                    <p class = "text-grayP">
                        <span class="font-bold text-lg">Total:</span>
                        ARS {{Cart::subTotal()}}
                    </p>
                </div>
    
                <div>
                    <x-button-enlace color="secondary">
                        CONTINUAR
                    </x-button-enlace>
                </div>
            </div>
        </div>
    @endif
</div>
