<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryListing extends Component
{
    use WithPagination;

    public $loadCount = 12;

    public function loadMore()
    {
        $this->loadCount += 12;
    }

    #[Computed()]
    public function galleries()
    {
        return Gallery::with('galleryable')
            ->whereNotNull('galleryable_id') // Ensure `galleryable` relation exists
            ->whereNotNull('galleryable_type') // Optional check if type also shouldn't be null
            ->take($this->loadCount)
            ->get();
    }
    public function render()
    {
        return view('livewire.gallery-listing', [
            'galleries' => $this->galleries
        ]);
    }
}
