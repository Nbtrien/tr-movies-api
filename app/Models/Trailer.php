<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    //
    protected $fillable = [
        'trailer_url'
    ];

    // Get the movie for the trailer
    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }
}
