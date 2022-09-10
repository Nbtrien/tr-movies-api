<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActorinMovie extends Model
{
    protected $table = 'actorinmovies';
    //
    protected $fillable = [
        'movie_id', 'actor_id'
    ];

    // Get the movie that owns the actor in movie.
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    // Get the actor that owns the actor in movie.
    public function actor()
    {
        return $this->belongsTo('App\Models\Actor');
    }
}
