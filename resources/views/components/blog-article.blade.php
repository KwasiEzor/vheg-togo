@props(['post'])
<div class="h-full">

    <article
        class="w-full h-full max-h-full mb-4 shadow group rounded-xl hover:shadow-xl flex-col flex justify-between">
        <figure class="relative overflow-hidden rounded-t-xl">
            <img src="{{ $url }}" class="transition-transform duration-200 ease-in rounded-t-xl group-hover:scale-110"
                alt="{{ $alt}}">
            <div
                class="absolute top-0 left-0 right-0 flex items-center justify-between p-3 bg-gradient-to-b from-slate-900/70 to-transparent backdrop:blur">
                <div class="flex items-center avatar">
                    <div class="w-10 rounded-full ring ring-zinc-50/50">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                    <p class="ml-2 text-sm font-bold text-white drop-shadow-xl">{{ $post->user->first_name }}</p>
                </div>
                <p class="text-sm font-bold text-white drop-shadow-xl h-full">
                    {{ $post->created_at->toFormattedDateString() }}
                </p>
            </div>
            @if ($post->is_featured)

            <div class="absolute flex justify-between bottom-4 right-4">
                <div class="px-4 py-1 font-bold tracking-wide text-white bg-green-600 rounded-full drop-shadow-lg">
                    New
                </div>

            </div>
            @endif
        </figure>
        <div class="flex flex-col w-full p-4 space-y-2">
            <h1
                class="h-full text-lg font-bold transition-colors duration-200 ease-out font-poppins group-hover:text-green-600 group-hover:underline group-hover:underline-offset-4">
                {{
                $title }}</h1>
            <p class="">
                {{ $content }}
            </p>
        </div>
    </article>

</div>