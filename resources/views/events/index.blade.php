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
            <livewire:event-listing />
        </div>
    </x-container>
</x-app-layout>