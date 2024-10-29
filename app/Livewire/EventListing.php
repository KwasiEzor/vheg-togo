<?php

namespace App\Livewire;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class EventListing extends Component
{
    use WithPagination;

    #[Url]
    public $location = '';

    #[Url]
    public $search = '';

    #[Url]
    public $sort = 'desc';

    #[Url]
    public $start_date = '';

    #[Url]
    public $end_date = '';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    #[Computed]
    public function events()
    {
        return Event::with('organizers', 'participants')
            ->search($this->search)
            ->when($this->activeLocation(), function (Builder $query) {
                $query->search($this->location);
            })
            ->when($this->start_date, function (Builder $query) {
                $query->where('start_date', '>=', $this->start_date);
            })
            ->when($this->end_date, function (Builder $query) {
                $query->where('end_date', '<=', $this->end_date);
            })
            ->orderBy('created_at', $this->sort)
            ->paginate(12);
    }

    #[Computed]
    public function activeLocation()
    {
        return $this->location ? Event::where('location', $this->location)->first() : null;
    }

    public function render()
    {
        $uniqueLocations = Event::distinct()->pluck('location');
        return view('livewire.event-listing', [
            'events' => $this->events(),
            'uniqueLocations' => $uniqueLocations
        ]);
    }
}
