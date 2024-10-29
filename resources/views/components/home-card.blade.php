@props([])
@php
$classes = " flex flex-col h-full p-4 md:p-6 bg-white rounded-xl shadow-xl";
@endphp
<div {{ $attributes(['class'=>$classes]) }} >
    <div class="w-full">
        <img src="{{ $url }}" class="object-cover max-w-20 mb-4" alt="Money image" />
    </div>
    <div class="flex flex-col justify-start  space-y-2">
        <h2 class="text-xl font-bold font-poppins text-gray-600 font-DM-Serif">
            {{ $title }}
        </h2>
        <p class="font-light text-gray-500">
            {{ $content }}
        </p>
    </div>
</div>