<div>
    @include('posts.partials.search-box',$categories)

    <section class="grid w-full grid-cols-1 gap-6 py-6 md:grid-cols-3 sm:grid-cols-2 ">
        @forelse ($this->posts as $post)

        <a wire:navigate href="{{ route('posts.show',$post) }}">
            <x-blog-article wire:key="$post->id" :$post>
                <x-slot name="url">
                    {{ $post->cover_img }}
                </x-slot>
                <x-slot name="alt">
                    {{ $post->title }}
                </x-slot>
                <x-slot name="author">
                    {{ $post->user->first_name }}
                </x-slot>
                <x-slot name="title">
                    {{ $post->title }}
                </x-slot>
                <x-slot name="featured">
                    {{ $post->is_featured }}
                </x-slot>
                <x-slot name="content">
                    {{ $post->getExcerpt() }}
                </x-slot>
            </x-blog-article>
        </a>

        @empty
        <p class="text-gray-500">No Articles for the moment...Coming soon!</p>
        @endforelse
    </section>
    <div class="flex items-center justify-between my-6 space-x-4">
        {{ $this->posts->links('vendor.pagination.tailwind') }}
    </div>
</div>