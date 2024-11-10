@props(['active' => false])

@php
    $class = ($active)
             ? 'nav-link active'
             : 'nav-link';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $class . ' flex items-center gap-5 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group']) }}>
    {{ $slot }}
</a>
