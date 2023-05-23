<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class MoviesEdit extends Component
{
    public $movieId;
    public $title;
    public $overview;

    public function mount($id)
    {
        $movie = Movie::findOrFail($id);

        $this->movieId = $movie->id;
        $this->title = $movie->title;
        $this->overview = $movie->overview;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'overview' => 'required',
        ]);

        $movie = Movie::findOrFail($this->movieId);

        $movie->update([
            'title' => $this->title,
            'overview' => $this->overview,
        ]);

        session()->flash('success', 'Film modifié avec succès.');

        return redirect()->route('movies.index');
    }

    public function render()
    {
        return view('livewire.movies-edit');
    }
}
