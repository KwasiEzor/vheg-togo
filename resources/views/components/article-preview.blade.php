@php
$classes = "p-3 rounded-md shadow-md";
@endphp

<article {{ $attributes(['class'=>$classes]) }} >
    <div class="w-full overflow-hidden">
        <img src="{{$url }}" class="object-cover rounded-t-lg" alt="volunteer project image" />
    </div>
    <div class="flex justify-between">
        <div class="flex items-center justify-between px-1 py-2">
            <p class="space-x-1 text-xs text-gray-500">
                <span class="text-green-600">
                    <i class="fa-solid fa-clock"></i>
                </span>
                <span> {{ $time }}</span>
            </p>
        </div>
        <div class="flex items-center justify-between px-1 py-2">
            <p class="space-x-1 text-xs text-gray-500">
                <span class="text-green-600">
                    <i class="fa-solid fa-location-dot"></i>
                </span>
                <span>{{ $city }}</span>
            </p>
        </div>
    </div>
    <div>
        <p class="font-bold leading-5 text-gray-500 underline md:text-lg underline-offset-2">
            {{ $content }}
        </p>
    </div>
    <button
        class="px-2 py-1 mt-2 text-green-600 transition-all duration-150 bg-transparent rounded-md hover:bg-green-600 hover:text-white hover:scale-90">
        <span> Read More </span>
        <i class="fa-solid fa-circle-chevron-right"></i>
    </button>
</article>