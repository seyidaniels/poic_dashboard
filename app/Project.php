<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'body', 'category', 'is_submitted', 'team_id', 'image', 'category', 'duration', 'objectives', 'goals', 'impact', 'monitoring_evaluation'
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

    public function smes($type)
    {
        $users = User::where('is_admin', 1)->where('id', '!=', Auth::id())->get();
        $smes  = [];
        $userCategory = strtolower($this->category);
        if (in_array($userCategory, ['food', 'security', 'software'])) {
            foreach ($users as $user) {
                if ($user->role->category == $userCategory && $user->role->role == $type) {
                    array_push($smes, $user);
                }
            }
        } else {
            foreach ($users as $user) {
                if ($user->role->role == $type) {
                    array_push($smes, $user);
                }
            }
        }
        return $smes;
    }

    public function scoredByAuthenticatedUser()
    {
        return Auth::user()->reviews()->where("project_id", $this->id)->sum('score') > 0;
    }

    public function hasBeenReviewedBy($type)
    {
        $reviews = $this->reviews()->where('score', null)->get();
        if (count($reviews) > 0) {
            $beenReviewed = true;
            foreach ($reviews as $r) {
                if ($r->user->role->role == $type) {
                    $beenReviewed = false;
                    break;
                }
            }
            return $beenReviewed;
        } else {
            return true;
        }
    }

    // This shows the list of Lecturers who have not reviewed their projects
    public function notReviewedBy()
    {
        $lecturersNotReviewed = [];
        $reviewIds = $this->reviews()->where('score', null)->select('reviewer_id')->get();
        $gottenReviewer = [];
        foreach ($reviewIds as $reviewer) {
            if (in_array($reviewer, $gottenReviewer)) continue;
            $user = User::find($reviewer)->first();
            array_push($lecturersNotReviewed, $user);
            array_push($gottenReviewer, $reviewer);
        }
        return $lecturersNotReviewed;
    }

    public function score($type)
    {
        $reviews = $this->reviews;

        // if (!$this->hasBeenReviewedBy($type)) return 'N/A';

        // if ($reviews == null) return 'N/A';

        $reviewTypes = [];
        foreach ($reviews as $review) {
            if ($review->user->role->role == $type) {
                array_push($reviewTypes, $review);
            }
        }


        if (count($reviewTypes) == 0)  return 'N/A';

        $vettingCategories =  [
            'originality',
            'relevance',
            'feasibility',
            'viability',
            'cost'
        ];
        // Then sort the reviews by category and get the weighted Average
        // return $reviewT
        $totalScore = 0;
        foreach ($vettingCategories as $category) {
            $categoryScore = [];
            $categorySum = 0;
            foreach ($reviewTypes as $review) {
                if ($review->vetting_category == $category) {
                    array_push($categoryScore, $review->score);
                }
            }
            $categorySum += array_sum($categoryScore) / count($categoryScore);
            $totalScore += $categorySum;
        }
        return round($totalScore, 1);
    }

    public function scoreCategories($type)
    {
        $reviews = $this->reviews;
        $reviewTypes = [];
        $categoryScore = [];

        foreach ($reviews as $review) {
            if ($review->user->role->role == $type) {
                array_push($reviewTypes, $review);
            }
        }

        if (count($reviewTypes) == 0)  return [];


        foreach ($reviewTypes as $review) {
            if (!isset($categoryScore[$review->vetting_category])) {
                $categoryScore[$review->vetting_category] =  $review->score;
            }else {
                $categoryScore[$review->vetting_category] += $review->score;

            }
        }
        return $categoryScore;

    }
}
