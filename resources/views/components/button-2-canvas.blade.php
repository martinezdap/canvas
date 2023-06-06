@props(['color'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex justify-center items-center px-4 py-3 bg-$color border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-secondaryHoover focus:bg-secondaryHoover active:bg-orangeCanvas focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>