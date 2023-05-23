<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'overview',
        'adult',
        'tmdb_id',
        'backdrop_path',
        'original_language',
        'original_title',
        'poster_path',
        'media_type',
        'genre_ids',
        'popularity',
        'release_date',
        'video',
        'vote_average',
        'vote_count'
    ];
}
