<x-app-layout>
    <x-container class="">
        @if (request()->routeIs('posts*'))
        <x-page-banner
            class="bg-[url('../../../public/images/volunteers-needed.jpg')] group bg-center bg-cover  bg-blend-multiply flex flex-col items-center justify-center">
            <div class="w-full max-w-lg p-4 text-white md:p-6">
                <a href="{{ route('posts.index') }}" wire:navigate>
                    <h1
                        class="text-4xl font-bold text-center uppercase transition-all duration-150 ease-out cursor-pointer md:text-6xl drop-shadow-lg group-hover:text-green-500 group-hover:stroke-white">
                        Blog
                    </h1>
                </a>
            </div>
        </x-page-banner>
        @endif
        <main class="w-full min-h-screen mx-auto ">
            <section class="max-w-screen-xl p-4 mx-auto">

            </section>
            @if (request()->routeIs('search'))
            <livewire:search-component field="title" />
            @else

            <livewire:post-listing />
            @endif

        </main>
    </x-container>
</x-app-layout>