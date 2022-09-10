<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieinTag extends Model
{
    //
    protected $table = 'movieintags';
    protected $fillable = [
        'movie_id', 'series_id'
    ];

    // Get the movie that owns the movie in series.
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    // Get the series that owns the movie in series.
    public function series()
    {
        return $this->belongsTo('App\Models\Series');
    }
}
