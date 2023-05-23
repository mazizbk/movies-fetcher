<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class MoviesDelete extends Component
{
    public $movieId;

    public function mount($id)
    {
        $this->movieId = $id;
    }

    public function delete()
    {
        $movie = Movie::findOrFail($this->movieId);
        $movie->delete();

        session()->flash('success', 'Film supprimé avec succès.');

        return redirect()->route('movies.index');
    }

    public function render()
    {
        return view('livewire.movies-delete');
    }
}
