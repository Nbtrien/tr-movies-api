<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Featuremovie extends Model
{
    protected $table = 'featuremovies';
    //
    protected $fillable = [
        'category_id', 'movie_id', 'video_id'
    ];

    // Get the category that owns the feature movie.
    public function category()
    {
        return $this->belongsTo('App\Models\Categories');
    }

    // Get the movie that owns the feature movie.
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    // Get the video that owns the feature movie.
    public function video()
    {
        return $this->belongsTo('App\Models\Video');
    }
}
