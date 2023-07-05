@props(['product'])
<li class="bg-white rounded-sm mb-4">
    <article class="flex">
        <figure>
            <img class="h-48 w-56 objet-cover object-center"
                src="{{ Storage::url($product->images->first()->url) }}" alt="">
        </figure>
        <div class="flex-1 py-4 px-6 flex flex-col justify-between">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-xl font-semibold text-blackCanvas">{{ $product->name }}
                    </h1>
                    <p class="font-semibold text-grayP text-xl">$ {{ $product->price }}</p>
                </div>

            </div>
            <div class="">
                <a href="{{ route('products.show', $product->id) }}">
                    <x-button>
                        Mas informacion
                    </x-button>
                </a>
            </div>
        </div>
    </article>
</li>