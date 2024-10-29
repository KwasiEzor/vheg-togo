<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;

class PostListing extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    #[Url()]
    public $category = '';

    public function setSort($sort)
    {
        return $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }



    #[Computed()]
    public function posts()
    {
        return Post::with(['categories', 'user', 'tags'])
            ->search($this->search)
            ->when($this->activeCategory(), function (Builder $query) {
                $query->withCategory($this->category);
            })

            ->orderBy('created_at', $this->sort)
            ->paginate(9);
    }

    #[Computed()]
    public function activeCategory()
    {
        return $this->category ? Category::where('slug', $this->category)->first() : null;
    }
    public function render()
    {
        return view(
            'livewire.post-listing',
            [
                'categories' => Category::orderBy('title', 'ASC')->get(),
                'posts' => $this->posts
            ]

        );
    }
}
