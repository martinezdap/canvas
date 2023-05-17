@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-lg text-secondary']) }}>
    {{ $value ?? $slot }}
</label>
