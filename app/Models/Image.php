<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = [
        'image_url'
    ];

    // Get the movies for the image.
    public function movies()
    {
       return $this->hasMany('App\Models\Movie', ['profileimage_id', 'coverimage_id']);
    }

    // Get the episodes for the image.
    public function episodes()
    {
        return $this->hasMany('App\Models\Episode', 'profileimage_id');
    }

    // Get the genres for the image.
    public function genres()
    {
        return $this->hasMany('App\Models\Genre', 'image_id');
    }

    // Get the actor for the image
    public function actors()
    {
        return $this->hasMany('App\Models\Actor');
    }

    // Get the director for the image
    public function directors()
    {
        return $this->hasMany('App\Models\Director');
    }
}
