<div class="w-full max-w-screen-xl min-h-screen px-4 py-10 mx-auto">
    <div class="max-w-lg mx-auto">
        <!-- Search Input -->
        <input type="text" class="w-full rounded-full form-control" placeholder="Search..." wire:model.live="query" />
    </div>

    <!-- Search Results -->
    @if($query)
    <h4 class="my-4 text-xl">Search Results for <span class="italic font-semibold">"{{ $query }}"</span>:</h4>

    @if($results->isEmpty())
    <p class="text-lg text-gray-500">No results found.</p>
    @else
    <ul class="flex flex-col space-y-3">
        @foreach($results as $result)
        <li class="w-full px-3 py-2 max-w-fit group hover:bg-zinc-200/50 rounded-xl">
            <!-- Dynamically link to the result if it has a route (e.g., assuming it has an ID) -->
            <a href="{{ route(strtolower($model) . '.show', $result->id) }}"
                class="text-lg transition-all duration-200 ease-out group-hover:underline group-hover:underline-offset-4">
                {{ $result->$field }}
            </a>
        </li>
        @endforeach
    </ul>
    @endif
    @endif
</div>