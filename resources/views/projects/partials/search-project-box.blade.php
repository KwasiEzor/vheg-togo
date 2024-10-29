<div class="mb-10">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
        <label for="start_date">Start Date:
            <input id="start_date" name="start_date" class="rounded-xl w-full" type="date"
                wire:model.live.debounce.250ms="start_date">
        </label>
        <label>End Date:
            <input class="rounded-xl w-full" type="date" wire:model.live.debounce.250ms="end_date">
        </label>
        <!-- Category Filter -->
        <aside class="flex flex-col items-center">
            <label for="category" class="self-start  ml-1 font-bold text-gray-800 font-poppins">Category</label>
            <select name="category" id="category" class="w-full rounded-xl" wire:model.live.debounce.250ms="category">
                <option value="">All Categories</option> <!-- For selecting all categories -->
                @foreach ($categories as $category)
                <option value="{{ $category->slug }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </aside>
    </div>
    <div class="flex flex-col space-y-2 max-w-lg mx-auto mb-3">
        <label for="search">Search</label>
        <input class="w-full px-3 rounded-xl" type="search" name="search" wire:model.live.debounce.250ms="search"
            placeholder="Search...">
    </div>
</div>