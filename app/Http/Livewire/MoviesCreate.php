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
        ]);

       

        Movie::create([
            'title' => $this->title,
            'overview' => $this->overview,
            'adult'=>0,
            'tmdb_id'=>rand(99999999,999999999999),
            'original_language'=> 'fr',
            'original_title'=> $this->title,
            'media_type'=> 'movie',
            'genre_ids'=> json_encode([28,33]),
            'popularity'=> 1000.222,
            'release_date'=> date('Y-m-d'),
            'vote_count'=> 0,
            'video'=>0,
            'vote_average'=> 0
        ]);

        session()->flash('success', 'Film ajouté avec succès');

        return redirect()->route('movies.index');
    }

    public function render()
    {
        return view('livewire.movies-create');
    }
}
