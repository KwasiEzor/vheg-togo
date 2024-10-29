@props(['project'])

<article class="flex flex-col w-full h-full shadow max-h-fit md:flex-row group hover:shadow-xl ">
    <figure class="w-full h-full md:w-2/6">
        <img class="object-cover rounded-t-xl md:rounded-l-xl" src="{{ $project->cover_img }}"
            alt="{{ $project->name }}">
    </figure>
    <aside class="w-full h-full p-4 md:w-4/6">
        <div class="flex flex-col justify-between w-full h-full">
            <h1 class="font-semibold text-gray-600 hover:text-green-600 text-md font-poppins">{{ $project->name }}</h1>
            <ul>
                <li class="flex flex-row mt-4 space-x-2 text-sm text-gray-500 md:mt-0">
                    <p>
                        <span>Start:</span>
                        <i class="fa-solid fa-calendar-days"></i>
                        <span class="hover:underline text-md hover:underline-offset-4">{{
                            $project->start_date->toFormattedDateString() }}</span>
                    </p>
                    <p>
                        <span>End:</span>
                        <i class="fa-solid fa-calendar-days"></i>
                        <span class="hover:underline text-md hover:underline-offset-4">{{
                            $project->end_date->toFormattedDateString() }}</span>
                    </p>
                </li>
            </ul>
            <a wire:navigate
                class="self-end px-4 py-1 mt-4 text-sm text-green-600 transition-all duration-200 ease-out border-2 rounded-md hover:shadow border-green-600/50 hover:text-white hover:bg-green-600 md:mt-0 hover:scale-95"
                href="{{ route('projects.show',$project) }}">
                <span class="mr-1 font-bold">
                    Learn more
                </span>
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </a>
        </div>
    </aside>
</article>