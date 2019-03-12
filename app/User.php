<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use League\Flysystem\Exception;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'firstname', 'lastname', 'phone', 'email', 'password', 'email_token', 'verified', 'is_admin'
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
        return $this->title . " " . $this->firstname . " " . $this->lastname;
    }

    public function hasRole()
    {
        if ($this->is_admin) {
            return $this->hasOne('App\Role');
        }
        throw new Exception("Unuthorised", 403);
    }

    public function role()
    {
        return $this->hasOne('App\Role');
    }
    public function category()
    {
        if ($this->is_admin) {
            return $this->hasRole->category;
        }
    }
    public function reviews()
    {
        if ($this->is_admin) {
            return $this->hasMany('App\Review', 'reviewer_id');
        }
    }
    public function reviewCategories($project_id)
    {
        return $this->reviews->where('project_id', $project_id)->pluck('vetting_category');
    }
}