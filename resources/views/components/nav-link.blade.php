@props(['active','navigate'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-2 border-green-600 text-sm font-medium leading-5 text-green-700
focus:outline-none focus:border-green-700 transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500
hover:text-gray-700 hover:border-gray-300 hover:scale-110 transition-all duration-150 focus:outline-none
focus:text-gray-700 focus:border-gray-300
transition
duration-150 ease-in-out';
@endphp

<a {{ $navigate ?? true ? 'wire:navigate' :' ' }} {{ $attributes->merge([' class'=> $classes]) }}>
    {{ $slot }}
</a>