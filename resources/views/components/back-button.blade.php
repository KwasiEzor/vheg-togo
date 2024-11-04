@props(['route'])
@php
$classes=" text-sm font-semibold space-x-1 mt-4 hover:text-green-600 hover:underline
hover:underline-offset-4
transition-all duration-100 ease-in";
@endphp
<a href="{{$route }}" {{ $attributes(['class'=>$classes]) }}
    wire:navigate> <span>
        {{ $slot }}
    </span>
    {{-- <i class="fa-solid fa-left-long"></i> --}}
    <span>
        <img src="{{ asset('images/svg/reply-all-arrow-icon.svg') }}" class="w-6 md:w-7  rounded-md" alt="arrow left">
    </span>
</a>
