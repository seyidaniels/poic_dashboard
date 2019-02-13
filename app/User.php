<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'phone', 'email', 'password', 'email_token', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_token'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function isTeamHead()
    {
        return $this->id == $this->team->head->id;
    }

    public function fullname()
    {
        return $this->firstname . " " . $this->lastname;
    }
}