<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function members()
    {
        return $this->hasMany('App\User');
    }

    protected $fillable = [
        'name', 'description', 'image', 'team_head'
    ];

    public function head()
    {
        return $this->belongsTo('App\User', 'team_head');
    }

    public function project()
    {
        return $this->hasOne('App\Project', 'team_id');
    }
}