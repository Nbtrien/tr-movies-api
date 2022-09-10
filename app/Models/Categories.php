<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    // 
    public function movies()
    {
        return $this->hasMany('App\Models\Movie','category_id');
    }

    // Get the featuremovies for the category
    public function featuremovies()
    {
        return $this->hasMany('App\Models\Featuremovie');
    }

    // Get the seriesmovie for the category.
    public function seriesmovies()
    {
        return $this->hasMany('App\Models\Seriesmovie');
    }
}
