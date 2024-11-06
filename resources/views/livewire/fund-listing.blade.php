<div class="grid w-full grid-cols-1 gap-4 p-4 bg-white rounded-xl md:grid-cols-3 sm:grid-cols-2 md:gap-6">
    @forelse ($this->funds as $fund )
    <x-fund-preview :$fund wire:key="{{ $fund->id }}" :rate="($fund->id * 10)" />
    @empty
    <p class="text-center text-gray-500">No fund available for moment...</p>
    @endforelse
</div>
