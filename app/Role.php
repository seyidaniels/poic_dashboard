<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['user_id', 'role', 'category'];

    // Role could be a super admin, judge or reviewer
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}