@props(['active'=>false])

<article class="flex flex-col p-2 transition-all duration-150 bg-white border-2 border-transparent shadow-xl cursor-pointer
    rounded-xl hover:scale-95 hover:border-green-600">
    <div class="w-full overflow-hidden max-h-fit p-2">
        <img src="{{ $url }}" class="w-24" alt="{{ $alt }}" />
    </div>
    <div class="flex flex-col space-y-3 mb-3">
        <h1 class="text-2xl pl-4 font-semibold text-gray-600 font-poppins">
            {{ $title }}
        </h1>
        <p class="font-light text-justify text-gray-500 text-md bg-zinc-50 px-2">
            {{ $content }}
        </p>
    </div>
</article>