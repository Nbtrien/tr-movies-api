<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seriesmovie extends Model
{
    //
    protected $fillable = [
        'category_id', 'movie_id', 'episodes'
    ];

    // Get the episodes for the seriesmovie.
    public function episodes()
    {
        return $this->hasMany('App\Models\Episode');
    }

    // Get the category that owns the seriesmovie
    public function category()
    {
        return $this->belongsTo('App\Models\Categories');
    }

    // Get the movie that owns the seriesmovie
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
