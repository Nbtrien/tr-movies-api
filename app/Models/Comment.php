<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    //
    protected $fillable = [
        'user_id', 'movie_id', 'parent_id', 'content',
    ];

    // Get the user that owns the comment
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Get the movie that owns the comment
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    // Get the comment that owns the comment
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'parent_id');
    }

    // Get the comment for the comment
    public function parent()
    {
        return $this->belongsTo('App\Models\Comment', 'parent_id');
    }
 
}
