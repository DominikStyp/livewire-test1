<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class AutocompleteSearch extends Component
{

    public Collection $allTitles;

    public Collection $titlesFiltered;

    public string $search;

    public function __construct($id = null)
    {
        parent::__construct($id);

        $this->search = '';

        $this->titlesFiltered = collect();

        $this->allTitles = collect([
            'Star Wars',
            'Matrix',
            'Lord of the Rings',
            'Robocop',
            'Terminator'
        ]);
    }

    public function mounted()
    {

    }

    public function render()
    {
        return view('livewire.autocomplete-search');
    }

    /**
     * Livewire hook
     *
     * @param string $search
     * @return void
     */
    public function updatedSearch(string $search)
    {
        if(empty($search)){
            $this->titlesFiltered = collect();

            return;
        }

        $this->titlesFiltered = $this->allTitles->filter(
            fn(string $title) => Str::contains($title, $search)
        );
    }

    public function clickSearchResult(string $search)
    {
        if(empty($search)){
            return;
        }

        $this->search = $search;

        $this->titlesFiltered = collect();
    }
}
