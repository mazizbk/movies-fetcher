<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class MoviesCreate extends Component
{
    public $title;
    public $overview;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'overview' => 'required',
        ]);

        Movie::create([
            'title' => $this->title,
            'overview' => $this->overview,
        ]);

        session()->flash('success', 'Movie created successfully.');

        return redirect()->route('movies.index');
    }

    public function render()
    {
        return view('livewire.movies-create');
    }
}
