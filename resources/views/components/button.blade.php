{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800
    border
    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
    focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2
    disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}

@props([
'type' => 'button', // button or link
'color' => 'gray', // gray, green, blue, etc.
'size' => 'md', // sm, md, lg
])

@php
// Define color classes based on the color prop
$colorClasses = match ($color) {
'gray' => 'bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 text-white',
'green' => 'bg-green-600 hover:bg-green-500 focus:bg-green-500 active:bg-green-700 text-white',
'blue' => 'bg-blue-600 hover:bg-blue-500 focus:bg-blue-500 active:bg-blue-700 text-white',
'white' => 'bg-white hover:bg-gray-700 hover:text-white focus:bg-gray-700 focus:text-white active:bg-gray-900
active:text-white
text-gray-800',
default => 'bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 text-white',
};

// Define size classes based on the size prop
$sizeClasses = match ($size) {
'sm' => 'px-2 py-1 text-xs',
'md' => 'px-4 py-2 text-sm',
'lg' => 'px-6 py-3 text-lg',
default => 'px-4 py-2 text-sm',
};
@endphp

@if($type === 'link')
<a {{ $attributes->merge(['class' => "inline-flex items-center border border-transparent rounded-md font-semibold
    uppercase tracking-widest $colorClasses $sizeClasses focus:outline-none focus:ring-2 focus:ring-offset-2
    focus:ring-green-500 disabled:opacity-50 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</a>
@else
<button {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex items-center border border-transparent
    rounded-md font-semibold uppercase tracking-widest $colorClasses $sizeClasses focus:outline-none focus:ring-2
    focus:ring-offset-2 focus:ring-green-500 disabled:opacity-50 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>
@endif
