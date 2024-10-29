<div>
    @include('projects.partials.search-project-box',$categories)
    <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 md:gap-6">
        @forelse ($this->projects as $project )
        <x-project-preview wire:key='{{ $project->id }}' :$project />
        @empty
        <p class="text-gray-500">No Projects for the moment...Coming very soon</p>
        @endforelse
        <div class="flex items-center justify-between my-6 space-x-4">
            {{ $this->projects->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</div>