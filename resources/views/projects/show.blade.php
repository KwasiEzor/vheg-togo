<x-app-layout>
    <x-container class="">
        @if (request()->routeIs('projects*'))
        <x-page-banner
            class="bg-[url('../../../public/images/volunteers-action.jpg')] group bg-center bg-cover  bg-blend-multiply flex flex-col items-center justify-center backdrop-blur-xl">
            <div class="w-full max-w-lg p-4 text-white md:p-6">
                <h1
                    class="text-4xl font-bold text-center uppercase transition-all duration-150 ease-out cursor-pointer md:text-6xl drop-shadow-lg group-hover:text-green-500 group-hover:stroke-white">
                    projects</h1>
            </div>

        </x-page-banner>
        @endif
        <div class="min-h-screen">
            <div class="flex flex-col items-center justify-center max-w-md mx-auto my-10 space-y-1">

                <h1 class="text-3xl font-bold text-gray-700 font-poppins">Project Details</h1>
                <p class="text-base text-center text-gray-500 md:text-base"> All you need to know to feel confortable
                    with the project</p>
            </div>
            <section class="w-full max-w-screen-lg p-4 py-10 mx-auto border-2 border-gray-100 shadow rounded-xl">
                <figure class="w-full h-full mx-auto overflow-hidden max-w-fit">
                    <img src="{{ $project->cover_img }}" alt="{{ $project->name }}" class=" rounded-t-xl">
                </figure>
                <div
                    class="flex flex-col w-full max-w-screen-md px-4 py-4 mx-auto mt-10 space-y-1 border-l-2 md:px-10 border-green-600/60 rounded-l-xl">
                    <div class="flex flex-col ">
                        <p class="italic text-gray-500">Project Title</p>
                        <h2 class="my-2 text-xl font-semibold capitalize font-poppins ">{{
                            $project->name }}
                        </h2>
                        <ul>
                            <li class="flex flex-row flex-wrap items-center space-x-1 space-y-2">
                                <span class="mr-2 italic text-gray-500 capitalize ">{{
                                    str('category')->plural($project->categories)
                                    }}</span>
                                @foreach ($project->categories as $category)
                                <span title="{{ $category->title }}"
                                    class="px-3 py-0.5 text-white uppercase rounded-md transition-all duration-200 ease-out shadow-sm cursor-pointer bg-green-600">
                                    {{ $category->title }}
                                </span>
                                @endforeach
                            </li>

                            <li class="flex items-center my-3 space-x-4">
                                <div class="flex flex-wrap items-center space-x-1">

                                    <span class="font-semibold text-green-600"><i class="fa-solid fa-users"></i></span>
                                    <span class="text-green-600 ">
                                        {{ $project->participants->count() }} Participants
                                    </span>
                                </div>
                                <div class="flex items-center space-x-3 text-green-600">
                                    <p>
                                        <span>Start:</span>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="underline text-md underline-offset-4">{{
                                            $project->start_date->toFormattedDateString() }}</span>
                                    </p>
                                    <p>
                                        <span>End:</span>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="underline text-md underline-offset-4">{{
                                            $project->end_date->toFormattedDateString() }}</span>
                                    </p>
                                </div>
                            </li>

                            <li class="flex flex-wrap items-center space-x-1"><span class="italic text-gray-500">Project
                                    Status</span> : <span
                                    class="px-4 py-1 font-semibold capitalize rounded-md text-amber-600 bg-amber-100/50 font-poppins">{{
                                    $project->status }}</span></li>
                            <li class="flex flex-col space-y-2">

                                <p class="p-3 my-2 text-gray-500 rounded-lg bg-green-200/30">

                                    {{ $project->description }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </x-container>
</x-app-layout>