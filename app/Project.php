<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

use Auth;

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

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function reviewCategories($project_id)
    {
        return $this->reviews->where('project_id', $project_id)->pluck('vetting_category');
    }

    public function reviewers()
    {
        $reviews = $this->reviews()->get();

        $users = [];

        foreach ($reviews as $reviewer) {
            if (!in_array($reviewer->reviewer_id, $users)) {
                array_push($users, $reviewer->reviewer_id);
            }
        }
        return User::find($users);
    }





    public function smes()
    {
        $users = User::where('is_admin', 1)->where('id', '!=', Auth::id())->get();
        $smes  = [];
        $userCategory = strtolower($this->category);
        if (in_array($userCategory, ['food', 'security', 'software'])) {
            foreach ($users as $user) {
                if ($user->role->category == $userCategory) {
                    array_push($smes, $user);
                }
            }
            return $smes;
        }
        return $users;
    }
}