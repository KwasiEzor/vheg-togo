<x-app-layout>
    <x-container class="">
        @if (request()->routeIs('posts*'))
        <x-page-banner
            class="bg-[url('../../../public/images/volunteers-needed.jpg')] group bg-center bg-cover  bg-blend-multiply flex flex-col items-center justify-center">
            <div class="w-full max-w-lg p-4 text-white md:p-6">
                <h1
                    class="text-4xl font-bold text-center uppercase transition-all duration-150 ease-out cursor-pointer md:text-6xl drop-shadow-lg group-hover:text-green-500 group-hover:stroke-white">
                    Blog</h1>
            </div>
        </x-page-banner>
        @endif
        <main class="w-full min-h-screen px-4 mx-auto md:px-6">
            <section class="w-full max-w-screen-md mx-auto">
                <article class="my-10">
                    <figure class="relative object-cover overflow-hidden">
                        <img src="{{ $post->cover_img }}" alt="{{ $post->title }}" class="rounded-xl">
                    </figure>
                    <div class="px-4 mt-4 ">
                        <div class="block mb-3">
                            Categories :
                        </div>
                        <div class="flex flex-row w-full space-x-3 text-lg font-bold left-2 shrink-0">
                            @foreach ($post->categories as $category )
                            <span class="px-4 py-1 text-white bg-green-600 rounded-md shadow-md drop-shadow-md">{{
                                $category->title }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex justify-between px-4 mt-3">
                        <div class="flex self-start gap-x-1">
                            <span class="underline semibold underline-offset-4">Author</span>
                            <span class="italic">: {{ $post->user->first_name .' '.$post->user->last_name }}</span>
                        </div>
                        <div class="text-sm ">
                            <span>Published at:</span>
                            <span class="text-gray-500">
                                {{ $post->created_at->toFormattedDateString() }}
                            </span>
                        </div>
                    </div>
                    <div class="flex gap-3 px-4 mt-3">
                        @foreach ($post->tags as $tag )
                        <div class="py-2 font-semibold badge-neutral badge">
                            #{{ $tag->name}}
                        </div>
                        @endforeach
                    </div>
                    <div class="px-4">
                        <h1 class="my-3 text-xl font-bold m md:text-3xl font-poppins">{{ $post->title }}</h1>
                        <p class="p-4 text-lg text-gray-500 bg-white rounded-xl">
                            {{ $post->body }}
                        </p>
                    </div>
                </article>
                <div class="flex flex-col justify-between w-full px-4 py-8">
                    <h3 class="text-gray-500 underline underline-offset-4">Comments:</h3>
                    @guest()

                    <livewire:comments :model="$post" read-only />
                    @else
                    <livewire:comments :model="$post" />
                    @endguest
                    @guest()

                    <p class="flex items-center justify-end w-full text-sm">Want to add a comment?<a
                            href="{{ route('login') }}"
                            class="self-end ml-1 font-semibold text-green-600 transition-all duration-150 hover:underline hover:underline-offset-4 hover:scale-105">Login</a>
                    </p>
                    @endguest
                </div>
            </section>
        </main>
    </x-container>
</x-app-layout>
