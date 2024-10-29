<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class SearchComponent extends Component
{

    public $field;
    public $query = '';
    public $results = [];

    protected $queryString = ['query'];



    public function updatedQuery()
    {

        $this->results = Post::query()
            ->where($this->field, 'like', '%' . $this->query . '%')->get();
    }

    public function render()
    {
        return view('livewire.search-component', [
            'results' => $this->results
        ]);
    }
}
