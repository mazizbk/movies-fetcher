<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MovieController extends Controller
{
    //
    public function details($id)
    {


        $client = new Client();


        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/'.$id.'?language=fr-FR', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('API_KEY'),
                'accept' => 'application/json',
            ],
        ]);
        $movies = json_decode($response->getBody(), true);
        
        return view('livewire.movies-details',compact('movies'));

    }
}
