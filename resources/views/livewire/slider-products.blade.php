<div wire:init='loadPosts' class="container">
    @if (count($productsList))
        <div class="glider-contain">
            <ul class="glider-products">

                @foreach ($productsList as $product)
                    <li class="bg-white rounded-sm {{ $loop->last ? '' : 'mr-4' }}">
                        <article>
                            <a href="{{ route('products.show', $product->id) }}">
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

            <button aria-label="Previous" class="glider-prev"><i class="fa-solid fa-angle-left"></i></button>
            <button aria-label="Next" class="glider-next"><i class="fa-solid fa-angle-right"></i></button>
            <div role="tablist" class="dots"></div>
        </div>
    @else
        <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl">

            <svg class="rounded animate-spin ease duration-300 w-10 h-10 " fill="none" height="48"
                viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 24C4 35.0457 12.9543 44 24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4"
                    stroke="#F9C115" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
            </svg>

            <h1 class="text-lg font-semibold py-4 px-6 text-emerald-400">Cargando...</h1>

        </div>
    @endif

</div>
