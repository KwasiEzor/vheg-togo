<div class="flex flex-col space-y-8">

    <div class="grid w-full grid-cols-1 gap-5 p-4 gallery-listing md:grid-cols-3 sm:grid-cols-2">
        @forelse ( $galleries as $gallery )
        <article
            class="relative flex flex-col p-4 my-6 border-[2px]  shadow-sm rounded-xl min-h-96 group hover:border-green-500 transition-all duration-200 ease-in-out hover:scale-95"
            wire:key="{{ $gallery->id }}" title="{{ $gallery->title }}">
            <div
                class="absolute left-[5%] right-[5%] shadow-xl group-hover:shadow-2xl -top-[40px] rounded-xl  max-w-[90%] border-4 border-zinc-50 overflow-hidden transition-all duration-200 ease-out z-20">

                <img src="{{ $gallery->cover_img }}"
                    class="object-cover w-full h-full transition-transform duration-200 ease-in rounded-xl group-hover:scale-110"
                    alt="cover image">
            </div>
            <div
                class="absolute bottom-[1rem] w-[90%]  h-full p-4  md:max-h-[30%] max-h-[40%] group-hover:bg-green-100/60 transition-all duration-200 ease-out rounded-xl">
                <h2 class="mb-2">This image gallery is memories</h2>
                <h3 class="flex items-center justify-between w-full text-sm text-gray-500"><span>Associated with
                        :</span>
                    <span
                        class="px-3 py-0.5 text-sm font-bold text-gray-100 uppercase rounded-lg bg-slate-800 group-hover:bg-green-600">{{
                        class_basename($gallery->galleryable_type) }}</span>
                </h3>
            </div>
            <a href="{{ route('galleries.show',$gallery) }}" wire:navigate
                class="absolute mt-3 overflow-hidden text-sm text-center text-green-600 transition-all duration-200 ease-out right-8 bottom-6 group-hover:font-bold">
                <span class="mr-1 transition-all duration-300 ease-in opacity-0 group-hover:opacity-100">view</span>
                <i
                    class="transition-transform duration-300 ease-out translate-x-full opacity-0 fa-solid fa-eye group-hover:opacity-100 group-hover:translate-x-0"></i></a>

        </article>
        @empty
        <p class="text-center text-gray-400">No galleries yet... coming soon</p>
        @endforelse
    </div>
    <div class="flex items-center justify-center">
        <button class="px-3 py-1 text-white bg-green-600 rounded-lg" wire:click='loadMore'>
            Load More
        </button>
    </div>
</div>
