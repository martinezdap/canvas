<div>
    <div class="bg-white rounded-lg mb-4">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold uppercase text-secondary">{{ $category->name }}</h1>

            <div class="grid grid-cols-2 border border-grayCanvas divide-x divide-grayCanvas">
                <i class="fas fa-border-all p-3 text-grayP cursor-pointer"></i>
                <i class="fa-solid fa-list p-3 text-grayP cursor-pointer"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-5">

        <aside>
            <h2 class="font-semibold text-center mb-2">Categorias</h2>
            <ul class="divide-y divide-grayBorder mr-4">
                @foreach ($categories as $cat)
                    <li class="py-2">
                        <a class="cursor-pointer hover:text-secondary" href="{{ route('categories.show', $cat) }}">
                            {{ $cat->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <h2 class="font-semibold text-center mt-4 mb-2">Marcas</h2>
            <ul class="divide-y divide-grayBorder mr-4">
                @foreach ($category->brands as $brand)
                    <li class="py-2 text-sm">
                        <a 
                            wire:click="$set('marca', '{{ $brand->name }}')"
                            class="cursor-pointer hover:text-secondary capitalize {{ $marca == $brand->name ? 'text-secondary font-semibold' : '' }}">
                            {{ $brand->name }}
                        </a>
                        
                    </li>
                @endforeach
            </ul>
            <x-button 
                wire:click="limpiar"
                class="mt-4">
                Eliminar filtro
            </x-button>
        </aside>

        <div class="col-span-4">
            <ul class="grid grid-cols-4 gap-4 mb-4">
                @foreach ($products as $product)
                    <li class="bg-white rounded-sm">
                        <article>
                            <a href="{{ route('products.show', $product) }}">
                                <div>
                                    <figure class="py-4 px-4">
                                        <img class="border border-grayCanvas h-48 w-56 object-cover object-center"
                                            src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                    </figure>

                                    <div class="pb-2 px-4">

                                        <p class="text-2xl text-blackCanvas">$ {{ $product->price }}</p>
                                        <h1 class="text-lg text-grayP">
                                            {{ Str::limit($product->name, 20) }}
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </li>
                @endforeach
            </ul>
            @if ($products->count() > 0)
                <div class="text-grayP text-opacity-80 font-semibold">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>
</div>