@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium form-label']) }}>
    {{ $value ?? $slot }}
</label>
