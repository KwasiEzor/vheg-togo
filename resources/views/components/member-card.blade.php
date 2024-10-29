@props(['is_member'=>false])

@php
$classes = "relative border-4 shadow-xl border-zinc-50 rounded-xl hover:border-green-600 cursor-pointer transition-all
duration-150";

$active_class = ($is_member ?? true) ? 'bg-green-600 !text-white' :'bg-zinc-50';
$heading_text_class = ($is_member ?? false) ? '!text-white':'text-gray-600';
$paragraph_text_class = ($is_member ?? false) ? '!text-white':'text-gray-500';
@endphp

<article {{ $attributes(['class'=>$classes]) }} >
    <div class="w-full overflow-hidden max-w-fit">
        <img src="{{ $url }}" class="object-cover h-full rounded-lg" alt="member image" />
    </div>
    <div class="absolute flex flex-col text-center w-full max-w-[80%] p-4 space-y-1 rounded-lg shadow 
        left-[10%] -bottom-6
        {{ $active_class }}
        ">
        <h3 class="text-xl font-bold {{ $heading_text_class }}">{{ $username }}</h3>
        <p class="text-sm {{ $paragraph_text_class }}">{{ $title }}</p>
    </div>
</article>