<div>

    <div class="grid grid-cols-1 gap-4 mt-10 md:grid-cols-4">
        <!--location filters -->
        <aside class="flex flex-col">
            <label for="location" class="self-start mb-3 ml-1 font-bold text-gray-800 font-poppins">Location</label>
            <select name="location" id="location" class="w-full rounded-xl" wire:model.live="location">
                <option value="">All locations</option> <!-- For selecting all categories -->
                @foreach ($uniqueLocations as $location)
                <option value="{{ $location }}">{{ $location }}</option>
                @endforeach
            </select>
        </aside>
        <!-- Start Date Filter -->
        <aside class="flex flex-col">
            <label for="start_date" class="self-start mb-3 ml-1 font-bold text-gray-800 font-poppins">Start Date</label>
            <input type="date" id="start_date" name="start_date" class="w-full rounded-xl"
                wire:model.live.debounce.250ms="start_date">
        </aside>

        <!-- End Date Filter -->
        <aside class="flex flex-col">
            <label for="end_date" class="self-start mb-3 ml-1 font-bold text-gray-800 font-poppins">End Date</label>
            <input type="date" id="end_date" name="end_date" class="w-full rounded-xl"
                wire:model.live.debounce.250ms="end_date">
        </aside>
        <!--order filters -->
        <aside class="flex flex-col items-center">
            <label for="order" class="self-start mb-3 ml-1 font-bold text-gray-800 font-poppins">Order</label>
            <select name="order" id="order" class="w-full rounded-xl" wire:model.live.debounce.250ms="sort">
                <option value="desc">Latest</option>
                <option value="asc">Oldest</option>
            </select>
        </aside>
    </div>
    <!--search input -->
    <div class="max-w-lg mx-auto mt-10">
        <input type="search" name="search" wire:model.live.debounce.250ms='search' id="search" placeholder="search..."
            class="w-full pl-4 rounded-xl">
    </div>
</div>