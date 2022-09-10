<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'google_id', 'avatar', 'avatar_original','email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Get the role that owns the  user
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    // Get the user view for the user
    public function userviews()
    {
        return $this->hasMany('App\Models\Userview');
    }

    //
    public function usermovies()
    {
        return $this->hasMany('App\Models\Usermovie');
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

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
