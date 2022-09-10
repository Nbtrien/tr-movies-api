<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'name', 'eng_name', 'description', 'language', 'studio', 'releasedate', 'runtime', 'avgrating', 'view', 'category_id', 'country_id', 'profileimage_id', 'coverimage_id'
    ];

    // Get the category that owns the movie
    public function category()
    {
        return $this->belongsTo('App\Models\Categories');
    }

    // Get the country that owns the movie
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    // Get the profileimage for the movie
    public function profileimage()
    {
        return $this->belongsTo('App\Models\Image');
    }

    // Get the coverimage for the movie
    public function coverimage()
    {
        return $this->belongsTo('App\Models\Image');
    }

    // Get the trailer for the movie
    public function trailer()
    {
        return $this->belongsTo('App\Models\Trailer');
    }

    // Get the actormovies fors the movie
    public function actorinmovies()
    {
        return $this->hasMany('App\Models\ActorinMovie');
    }

    // Get the movieintag for the movie
    public function movieintags()
    {
        return $this->hasMany('App\Models\MovieinTag');
    }

    // 
    public function genreinmovies()
    {
        return $this->hasMany('App\Models\GenreinMovie');
    }

    // 
    public function directorinmovies()
    {
        return $this->hasMany('App\Models\DirectorinMovie');
    }

    // 
    public function userviews()
    {
        return $this->hasMany('App\Models\Userview');
    }

    //
    public function usermovies()
    {
        return $this->hasMany('App\Models\Usermovie', 'movie_id');
    }

    // 
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }

    //
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    // Get the movieinseries in movie for the series
    public function movieinseries()
    {
        return $this->hasMany('App\Models\MovieinSeries');
    }

    // Get the featuremovie record associated with the movie.
    public function featuremovies()
    {
        return $this->hasOne('App\Models\Featuremovie');                                                           
    }

    // Get the seriesmovie record associated with the movie.
    public function seriesmovies()
    {
        return $this->hasOne('App\Models\Seriesmovie');                                                           
    }
}
