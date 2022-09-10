<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    // Get the movie for the country
    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }

    // Get the actor for the country
    public function actors()
    {
        return $this->hasMany('App\Models\Actor');
    }

    // Get the director for the country
    public function directors()
    {
        return $this->hasMany('App\Models\Director');
    }
}
