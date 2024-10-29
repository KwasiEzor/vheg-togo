@php
$classes = "w-full px-4 mx-auto max-w-screen-xl md:px-6";
@endphp

<div {{ $attributes->merge(['class'=>$classes])}} >
    {{ $slot }}
</div>