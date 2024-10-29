<div class="grid grid-cols-1 gap-4 md:grid-cols-3">
    <!-- Category Filter -->
    <aside class="flex flex-col items-center">
        <label for="category" class="self-start mb-3 ml-1 font-bold text-gray-800 font-poppins">Category</label>
        <select name="category" id="category" class="w-full rounded-xl" wire:model.live.debounce.250ms="category">
            <option value="">All Categories</option> <!-- For selecting all categories -->
            @foreach ($categories as $category)
            <option value="{{ $category->slug }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </aside>

    <!-- Order Filter -->
    <aside class="flex flex-col items-center">
        <label for="order" class="self-start mb-3 ml-1 font-bold text-gray-800 font-poppins">Order</label>
        <select name="order" id="order" class="w-full rounded-xl" wire:model.live.debounce.250ms="sort">
            <option value="desc">Latest</option>
            <option value="asc">Oldest</option>
        </select>
    </aside>

    <!-- Search Box -->
    <aside class="flex flex-col items-center">
        <label for="search" class="self-start mb-3 ml-1 font-bold text-gray-800 font-poppins">Search</label>
        <div class="relative w-full">
            <input type="search" name="search" id="search" class="w-full pl-4 rounded-xl" placeholder="Search..."
                wire:model.live.debounce.250ms.debounce="search" />

        </div>
    </aside>
</div>