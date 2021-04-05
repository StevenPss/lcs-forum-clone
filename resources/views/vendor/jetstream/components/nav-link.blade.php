@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 rounded border-b-4 border-white text-sm font-medium leading-5 text-gray-100 focus:outline-none focus:border-white transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 rounded border-b-4 border-transparent text-sm font-medium leading-5 text-gray-300 hover:text-white hover:border-white focus:outline-none focus:text-white focus:border-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
