<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userview extends Model
{
    protected $table = 'userviews';
    //
    protected $fillable = [
        'user_id', 'movie_id', 'episode_id'
    ];

    // Get the user that owns the usermovie
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Get the Movie that owns the user movie
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    // Get the Episode that owns the user movie
    public function episode()
    {
        return $this->belongsTo('App\Models\Episode');
    }
}
