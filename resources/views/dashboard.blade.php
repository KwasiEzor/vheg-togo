<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-container class="my-4 bg-white min-h-screen rounded-xl">
        <div class="w-full mx-auto p-4 md:p-6">
            <h1>Welcome {{ Auth::user()->first_name .' '.Auth::user()->last_name}}</h1>
        </div>
    </x-container>
</x-app-layout>