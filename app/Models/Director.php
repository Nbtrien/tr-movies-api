<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
    protected $fillable = [
        'name', 'birthday', 'gender','story','country_id','image_id'
    ];

    // Get the directorinmovies for the actor
    public function directorinmovies()
    {
        return $this->hasMany('App\Models\DirectorinMovie');
    }

    // Get the image for the actor
    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }

    // Get the country for the actor
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
