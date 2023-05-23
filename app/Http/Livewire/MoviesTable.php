<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class MoviesTable extends Component
{

    public function render()
    {
        $movies = Movie::all();

        return view('livewire.movies-table', compact('movies'));
    }
}
