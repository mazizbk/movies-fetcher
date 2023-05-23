<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MovieController extends Controller
{
    //
    public function show($id){
//385687


$client = new Client();
       

$response = $client->request('GET', 'https://api.themoviedb.org/3/movie/385687?language=fr-FR', [
    'headers' => [
      'Authorization' => 'Bearer '.env('API_KEY'),
      'accept' => 'application/json',
    ],
  ]);
$movies = json_decode($response->getBody(), true);
dd($movies);
        var_dump('Hello MovieController');
    }
}
