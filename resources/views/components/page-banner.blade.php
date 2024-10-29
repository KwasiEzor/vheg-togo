@php
$classes = "w-full h-full min-h-96 bg-gray-900/40 rounded-b-xl";
@endphp

<header {{ $attributes(['class'=>$classes]) }} >
    {{ $slot }}
</header>