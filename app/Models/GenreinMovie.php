<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genreinmovie extends Model
{
    protected $table = 'genreinmovies';
    //
    protected $fillable = [
        'movie_id', 'genre_id'
    ];

    // Get the gemre that owns the genre in movie.
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }

    // Get the movie that owns the genre in movie
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    } 
}
