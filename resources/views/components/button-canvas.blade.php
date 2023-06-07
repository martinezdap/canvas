@props(['width' => '44'])

@php
    switch ($width) {
        case '48':
            $width = 'w-48';
            break;
        case '56':
            $width = 'w-56';
            break;
    }
@endphp

<button
{{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center px-4 py-2 h-12 bg-secondary border border-none rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-secondaryHoover focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }} class="{{ $width }}">
    <span class="text-lg text-white">{{ $slot }}</span>
</button>
