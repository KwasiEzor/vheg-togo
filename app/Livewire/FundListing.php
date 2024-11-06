<?php

namespace App\Livewire;

use App\Models\Fund;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class FundListing extends Component
{
    use WithPagination;

    #[Computed()]
    public function funds()
    {
        return Fund::with(['category', 'project', 'participants'])->latest()->paginate(9);
    }

    public function render()
    {
        return view('livewire.fund-listing');
    }
}
