<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //
    protected $fillable = [
        'seriesmovie_id', 'episode', 'title', 'profileimage_id','video_id','created_at'
    ];

    // Get the seriesmovie that owns the episode.
    public function seriesmovie()
    {
        return $this->belongsTo('App\Models\Seriesmvovie');
    }

    // Get the image that owns the episode.
    public function image()
    {
        return $this->belongsTo('App\Models\Image', 'profileimage_id');
    }

    // Get the video that owns the episode.
    public function video()
    {
        return $this->belongsTo('App\Models\Video');
    }

    // Get the user view for the episode
    public function userviews()
    {
        return $this->hasMany('App\Models\Userview');
    }

}
