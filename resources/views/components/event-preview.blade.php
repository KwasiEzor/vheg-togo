@props(['event'])
@php
$classes = "flex flex-col transition-all duration-200 ease-in shadow rounded-xl group hover:shadow-xl border-2
border-transparent hover:border-zinc-200";
@endphp

<article {{ $attributes(['class'=>$classes]) }} >
    <figure class="w-full h-full overflow-hidden max-h-[50%] rounded-t-xl">
        <img src="{{ $event->cover_img }}"
            class="object-cover transition-transform duration-200 ease-in rounded-t-xl group-hover:scale-110"
            alt="{{ $event->title }}">
    </figure>
    <div class="flex flex-col justify-between w-full h-full p-4 min-h-52">
        <h1 class="h-full text-base font-bold text-gray-700 font-poppins">{{ $event->title }}</h1>
        <div class="flex-grow w-full h-full">
            <ul class="mt-2">
                <li class="text-green-600">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>
                        {{ $event->location }}
                    </span>
                </li>
                <li class="flex space-x-4 shrink-0">
                    <p class="mt-1 text-sm text-gray-500 ">
                        Start :
                        <span class="text-gray-500 underline underline-offset-4">
                            <i class="fa-solid fa-calendar-days"></i>
                            {{ $event->start_date->toFormattedDateString() }}
                        </span>
                    </p>
                    <p class="mt-1 text-sm text-gray-500 ">
                        End :
                        <span class="text-gray-500 underline underline-offset-4">
                            <i class="fa-solid fa-calendar-days"></i>
                            {{ $event->end_date->toFormattedDateString() }}
                        </span>
                    </p>
                </li>
                <li class="mt-3 text-gray-500">
                    Organizer: <span class="text-sm font-bold uppercase">{{ $event->organizer }}</span>
                </li>
            </ul>

        </div>
        <button
            class="mt-4 text-base capitalize transition-transform duration-200 ease-in btn btn-outline group/item hover:scale-95">Get
            your place now
            <i
                class="transition-all duration-150 ease-in opacity-0 fa fa-thumbs-up group-hover/item:opacity-100 group-hover/item:scale-105 group-hover/item:animate-bounce"></i>
        </button>
        <a href="{{ route('events.show',$event) }}" wire:navigate
            class="mt-4 overflow-hidden text-base text-green-600 capitalize group/action hover:border-green-600 hover:bg-green-600 hover:text-white hover:drop-shadow-lg btn btn-outline">More
            Informations
            <i
                class="transition-all duration-200 ease-out opacity-0 group-hover/action:scale-105 group-hover:translate-x-1 group-hover/action:opacity-100 fa fa-arrow-right-to-bracket group-hover/action:animate-ping"></i>
        </a>
    </div>
</article>