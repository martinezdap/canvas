<span class="relative inline-block">
    <a href="#" class=" text-secondary text-2xl hover:text-white transition ease-in-out duration-150">
        <i class="fa-solid fa-cart-shopping fa-lg"></i>
    </a>

    @if (Cart::count())
        <span
            class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-secondary transform translate-x-1/2 -translate-y-1/2 bg-white rounded-full">{{ Cart::count() }}</span>
    @else
        <span
            class="absolute top-0 right-0 inline-block w-2.5 h-2.5 transform translate-x-1/2 -translate-y-1/2 bg-white rounded-full"></span>
    @endif
</span>
