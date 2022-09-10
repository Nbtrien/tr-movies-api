<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    // Get the movieinseries in movie for the series
    public function movieinseries()
    {
        return $this->hasMany('App\Models\MovieinSeries');
    }
}
