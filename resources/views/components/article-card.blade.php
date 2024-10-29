<article class="w-full h-full border-2 border-transparent shadow-md rounded-xl bg-white">
    <div class="relative w-full overflow-hidden">
        <img src="{{ $url }}" alt="food for kids" class="w-full h-full max-w-fit rounded-t-xl" />
        <span
            class="absolute px-5 py-1 font-semibold text-white uppercase bg-green-600 rounded-md bottom-4 left-4 drop-shadow">
            {{ $badge }}
        </span>
    </div>
    <div class="w-full px-3 pb-4">
        <h4 class="my-4 text-xl font-bold text-green-600 font-DM-Serif">
            {{ $title }}
        </h4>
        <div class="p-4 mb-4 leading-6 text-justify text-gray-500 rounded-md bg-zinc-50">
            {{ $content }}
        </div>
        <div class="flex flex-col items-center space-y-3">
            <div class="relative w-full pt-12">
                <span
                    class="absolute bottom-0 mb-4 -translate-x-1/2 w-12 h-10 bg-white shadow-[0px_12px_30px_0px_rgba(16,24,40,0.1)] rounded-full px-3.5 py-2 text-gray-800 text-xs font-medium flex justify-center items-center after:absolute after:bg-white after:flex after:bottom-[-5px] after:left-1/2 after:-z-10 after:h-3 after:w-3 after:-translate-x-1/2 after:rotate-45"
                    style="left: 50%">{{ $rate }}%</span>
                <div class="relative flex w-full h-2.5 overflow-hidden rounded-3xl bg-gray-100">
                    <div role="progressbar" aria-valuenow="{{ $rate }}" aria-valuemin="0" aria-valuemax="100"
                        style="width: {{ $rate }}%"
                        class="flex items-center justify-center h-full text-white bg-green-600 rounded-3xl"></div>
                </div>
            </div>
            <div class="flex items-center justify-between w-full my-4 font-DM-Serif">
                <div class="inline-flex space-x-2">
                    <p class="font-bold text-gray-600">${{ $fund }}</p>
                    <p class="font-normal text-gray-400">Raised now</p>
                </div>
                <div class="inline-flex space-x-2">
                    <p class="font-bold text-gray-600">${{ $target }}</p>
                    <p class="font-normal text-gray-400">Our Target</p>
                </div>
            </div>
        </div>
    </div>
</article>