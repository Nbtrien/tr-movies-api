<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    // Get the movieintag for the tag
    public function movieintags()
    {
        return $this->hasMany('App\Models\MovieinTag');
    }
}
