<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    protected $fillable = [
        'name', 'birthday', 'gender','story','view','country_id','image_id'
    ];                                                             

    // Get the actorinmovies for the actor
    public function actorinmovies()
    {
        return $this->hasMany('App\Models\ActorinMovie');
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
