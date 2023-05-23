<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TrendingMoviesController extends Controller
{
    public function index(){


        $client = new Client();
       

        $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/movie/day?language=fr-FR', [
            'headers' => [
              'Authorization' => 'Bearer '.env('API_KEY'),
              'accept' => 'application/json',
            ],
          ]);
        $movies = json_decode($response->getBody(), true)['results'];
        dd($movies);
        return view('movies.trending', []);
    }
}
