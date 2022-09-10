<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $fillable = [
        'user_id', 'movie_id', 'value'
    ];

    // Get the user that owns the rating
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Get the movie that owns the rating
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
