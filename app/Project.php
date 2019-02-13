<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'body', 'category', 'is_submitted', 'team_id', 'image'
    ];

    public function category()
    {
        return $this->hasOne('Category');
    }

    public function team()
    {
        return $this->belongsTo('App\Team', 'team_id');
    }
}