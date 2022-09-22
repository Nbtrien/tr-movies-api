<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'video_url'
    ];

    public function featuremovies()
    {
        return $this->hasMany('App\Models\Featuremovie');
    }

    public function episodes()
    {
        return $this->hasMany('App\Models\Episode');
    }
}
