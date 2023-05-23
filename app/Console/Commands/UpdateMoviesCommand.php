<?php

namespace App\Console\Commands;

use App\Models\Movie;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class UpdateMoviesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'movies:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mise a jour des films';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new Client();
       

        $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/movie/day?language=fr-FR', [
            'headers' => [
              'Authorization' => 'Bearer '.env('API_KEY'),
              'accept' => 'application/json',
            ],
          ]);
        $popularMovies = json_decode($response->getBody(), true);

        foreach ($popularMovies['results'] as $movie) {
            // Vérifier si le film existe déjà dans la base de données
            $existingMovie = Movie::where('tmdb_id', $movie['id'])->first();

            if ($existingMovie) {
                // Mettre à jour les détails du film existant
                $existingMovie->title = $movie['title'];
                $existingMovie->overview = $movie['overview'];
                $existingMovie->poster_path = $movie['poster_path'];
                $existingMovie->media_type = $movie['media_type'];
                $existingMovie->genre_ids = json_encode($movie['genre_ids']);
                $existingMovie->popularity = $movie['popularity'];
                $existingMovie->release_date = $movie['release_date'];
                $existingMovie->video = $movie['video'];
                $existingMovie->vote_average = $movie['vote_average'];
                $existingMovie->adult = $movie['adult'];
                $existingMovie->original_language = $movie['original_language'];
                $existingMovie->original_title = $movie['original_title'];
                $existingMovie->vote_count = $movie['vote_count'];
                $existingMovie->save();
            } else {
                // Créer un nouveau film dans la base de données
                $newMovie = new Movie();
                $newMovie->tmdb_id = $movie['id'];
                $newMovie->title = $movie['title'];
                $newMovie->overview = $movie['overview'];
                $newMovie->poster_path = $movie['poster_path'];
                $newMovie->media_type = $movie['media_type'];
                $newMovie->genre_ids = json_encode($movie['genre_ids']);
                $newMovie->popularity = $movie['popularity'];
                $newMovie->release_date = $movie['release_date'];
                $newMovie->video = $movie['video'];
                $newMovie->vote_average = $movie['vote_average'];
                $newMovie->vote_count = $movie['vote_count'];
                $newMovie->adult = $movie['adult'];
                $newMovie->original_language = $movie['original_language'];
                $newMovie->original_title = $movie['original_title'];


                $newMovie->save();
            }
        }

        $this->info('la mise à jour est effectuée!');
    }
}
