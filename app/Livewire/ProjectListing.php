<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class ProjectListing extends Component
{
    use WithPagination;

    #[Url()]
    public string $search = '';

    #[Url()]
    public string $sort = 'desc';

    #[Url()]
    public string $category = '';


    #[Url]
    public $start_date = '';

    #[Url]
    public $end_date = '';

    public function setSort(string $sort)
    {
        return $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }



    #[Computed()]
    public function projects()
    {
        return Project::with('participants', 'categories')
            ->search($this->search)
            ->when($this->activeCategory(), function (Builder $query) {
                $query->withCategory($this->category);
            })
            ->when($this->start_date, function (Builder $query) {
                $query->where('start_date', '>=', $this->start_date);
            })
            ->when($this->end_date, function (Builder $query) {
                $query->where('end_date', '<=', $this->end_date);
            })
            ->orderBy('created_at', $this->sort)
            ->paginate(10);
    }

    #[Computed()]
    public function activeCategory()
    {
        return $this->category ? Category::where('slug', $this->category)->first() : null;
    }

    public function render()
    {
        $categories = Category::orderBy('title', 'ASC')->get();
        return view('livewire.project-listing', [
            'projects' => $this->projects,
            'categories' => $categories,
        ]);
    }
}
