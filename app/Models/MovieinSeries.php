<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieinSeries extends Model
{
    //
    protected $table = 'movieinseries';
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
