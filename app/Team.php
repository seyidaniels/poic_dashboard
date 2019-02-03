<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function members (){
        return $this->hasMany('App\User');
    }

    protected $fillable = [
        'name', 'description', 'image'
    ];
}
