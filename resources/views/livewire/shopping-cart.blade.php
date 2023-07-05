<div class="container py-8">
    <section class="bg-whiteCanvas rounded-lg shadow-lg p-6 text-grayP">
        <h1 class="text-lg font-semibold mb-6">CARRITO DE COMPRAS</h1>

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

                        <td>
                            <span>ARS {{$item->price}}</span>
                            <a class="ml-6 cursor-pointer hover:text-secondary">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>

                        <td>
                            @if($item->options->size)
                                @livewire('update-cart-item-size', ['rowId' => $item->rowId], key($item->rowId))
                            @elseif($item->options->color)
                                @livewire('update-cart-item-color', ['rowId' => $item->rowId], key($item->rowId))
                            @else
                                @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                            @endif
                        </td>

                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
