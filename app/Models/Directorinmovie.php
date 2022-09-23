<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectorinMovie extends Model
{
    use HasFactory;
    protected $table = 'directorinmovies';
    //
    protected $fillable = [
        'movie_id', 'director_id'
    ];

    // Get the movie that owns the director in movie.
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    // Get the director that owns the director in movie.
    public function director()
    {
        return $this->belongsTo('App\Models\Director');
    }
}
