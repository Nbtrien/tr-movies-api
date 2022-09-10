<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $fillable = [
        'name', 'image_id'
    ];

    //
    public function genreinmovies()
    {
        return $this->hasMany('App\Models\GenreinMovie');
    }

    // Get the image that owns the episode.
    public function image()
    {
        return $this->belongsTo('App\Models\Image', 'image_id');
    }
}
