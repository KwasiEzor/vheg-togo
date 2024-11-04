<x-app-layout>
    <div class="relative max-w-screen-xl min-h-screen p-4 mx-auto">
        <h1 class="my-8 mb-8 text-3xl font-semibold text-center font-poppins">This is the gallery of the : <span
                class="font-poppins text-zinc-600">{{
                class_basename($gallery->galleryable_type) }}</span> </h1>
        @if ($gallery->galleryable)

        <p
            class="px-4 py-2 mx-auto mb-6 font-semibold text-center text-white bg-green-600 rounded-md shadow-sm max-w-fit">
            <span class="uppercase ">
                title :
            </span><span class="text-base capitalize ">

                {{ $gallery->galleryable->title ?? $gallery->galleryable->name }}
            </span>
        </p>
        @endif

        <x-back-button route="{{ route('galleries.index') }}" class="absolute right-[5%]" />

        <section
            class="w-full h-full max-h-full gap-4 px-4 py-12 space-y-4 bg-white shadow md:px-6 rounded-xl border-zinc-50 columns-2 md:columns-4">
            @forelse ($gallery->getMedia('images') as $media )
            <img src="{{ $media->getUrl() }}" alt="{{ $gallery->title }}" class="w-full h-auto rounded-xl">
            @empty
            <p class="text-center text-gray-500">no images.</p>
            @endforelse
        </section>
    </div>
</x-app-layout>
