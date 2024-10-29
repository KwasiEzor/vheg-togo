<x-app-layout>
    <x-container class="">
        @if (request()->routeIs('events*'))
        <x-page-banner
            class="bg-[url('../../../public/images/volunteer-1.jpg')] group bg-center bg-cover  bg-blend-multiply flex flex-col items-center justify-center">
            <div class="w-full max-w-lg p-4 text-white md:p-6">
                <h1
                    class="text-4xl font-bold text-center uppercase transition-all duration-150 ease-out cursor-pointer md:text-6xl drop-shadow-lg group-hover:text-green-500 group-hover:stroke-white">
                    events</h1>
            </div>
        </x-page-banner>
        @endif
        <div class="min-h-screen">
            <div class="flex flex-col items-center justify-center max-w-md mx-auto my-10 space-y-1">

                <h1 class="text-3xl font-bold text-gray-700 font-poppins">Event Details</h1>
                <p class="text-base text-center text-gray-500 md:text-base"> All the usefull informations you
                    need to
                    know
                    about this
                    event</p>
            </div>
            <section class="w-full max-w-screen-lg p-4 py-10 mx-auto border-2 border-gray-100 shadow rounded-xl">
                <figure class="w-full h-full mx-auto overflow-hidden max-w-fit">
                    <img src="{{ $event->cover_img }}" alt="{{ $event->title }}" class=" rounded-t-xl">
                </figure>
                <div
                    class="flex flex-col w-full max-w-screen-md px-4 py-4 mx-auto mt-10 space-y-1 border-l-2 md:px-10 border-green-600/60 rounded-l-xl">
                    <div class="flex flex-col ">
                        <p class="italic text-gray-500">Event Title</p>
                        <h2 class="my-2 text-xl font-semibold capitalize font-poppins ">{{
                            $event->title }}
                        </h2>
                        <ul>
                            <li class="flex flex-row flex-wrap items-center space-x-1 space-y-2">
                                <span class="mr-2 italic text-gray-500 capitalize ">{{
                                    str('organizer')->plural($event->organizers)
                                    }}</span>
                                @foreach ($event->organizers as $organizer)
                                <span title="{{ $organizer->organizer_type }}"
                                    class="px-3 py-0.5 text-white uppercase rounded-md transition-all duration-200 ease-out shadow-sm cursor-pointer bg-green-600">
                                    {{ $organizer->name }}
                                </span>
                                @endforeach
                            </li>
                            <li class="flex items-center my-3 space-x-4">
                                <div class="flex flex-wrap items-center space-x-1">

                                    <span class="font-semibold text-green-600"><i class="fa-solid fa-users"></i></span>
                                    <span class="text-green-600 ">
                                        {{ $event->participants->count() }} Participants
                                    </span>
                                </div>
                                <div class="flex items-center space-x-3 text-green-600">
                                    <p>
                                        <span>Start:</span>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="underline text-md underline-offset-4">{{
                                            $event->start_date->toFormattedDateString() }}</span>
                                    </p>
                                    <p>
                                        <span>End:</span>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="underline text-md underline-offset-4">{{
                                            $event->end_date->toFormattedDateString() }}</span>
                                    </p>
                                </div>
                            </li>
                            <li class="flex flex-wrap mb-3 space-x-2" title="Event location">
                                <span class="text-green-600 "><i class="fa-solid fa-map-location-dot"></i> </span> <span
                                    class="text-green-600">{{
                                    $event->location
                                    }}</span>
                            </li>
                            <li class="flex flex-wrap items-center space-x-1"><span class="italic text-gray-500">Project
                                    Status</span> : <span
                                    class="px-4 py-1 font-semibold capitalize rounded-md text-amber-600 bg-amber-100/50 font-poppins">{{
                                    $event->status }}</span></li>
                            <li class="flex flex-col space-y-2">

                                <p class="p-3 my-2 text-gray-500 rounded-lg bg-green-200/30">

                                    {{ $event->description }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </x-container>
</x-app-layout>