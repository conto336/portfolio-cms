@props(['active'])

@php
$classes = ($active ?? false)    
            ? 'btn-danger'
            : 'btn-primary';
@endphp

<button  {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>