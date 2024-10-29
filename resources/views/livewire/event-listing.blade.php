<div class="w-full h-full">
    @include('events.partials.search-event-box',$uniqueLocations)

    <section class="grid grid-cols-1 gap-6 py-10 my-10 md:grid-cols-3 sm:grid-cols-2">
        @forelse ( $this->events as $event )

        <x-event-preview :$event wire:key='{{ $event->id }}' />
        @empty
        <p class="text-gray-500">No Events for the moment...Coming soon!</p>
        @endforelse

    </section>
    <div class="flex items-center justify-between my-6 space-x-4">
        {{ $this->events->links('vendor.pagination.tailwind') }}
    </div>
</div>