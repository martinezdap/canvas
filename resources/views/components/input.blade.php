@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-none h-12 text-lg focus:border-secondary focus:ring-secondary rounded-md shadow-sm']) !!}>
