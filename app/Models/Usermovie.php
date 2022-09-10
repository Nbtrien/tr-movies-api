<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usermovie extends Model
{
    protected $table = 'usermovies';
    //
    protected $fillable = [
        'user_id', 'movie_id'
    ];

    // Get the user that owns the usermovie
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Get the Movie that owns the user movie
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie', 'movie_id');
    }
}
