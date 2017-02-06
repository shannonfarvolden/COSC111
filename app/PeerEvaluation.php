<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeerEvaluation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * A Peer Evaluation belongs to many submissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function submissions()
    {
        return $this->belongsToMany('App\Submission')->withTimestamps();
    }

    /**
     * A Peer Evaluation has many assessments.
     *
     * @return mixed
     */
    public function assessments(){
        return $this->hasMany('App\Assessment');
    }

    /**
     * Get the assessment average of a user for a Peer Evaluation.
     *
     * @param $user_id
     * @return float|int
     */
    public function assessmentAvg($user_id){
        $assessments = $this->assessments()->where('evaluatee', $user_id)->get();
        $total = 0;
        //if no assessments, average is 1
        $average = 1;

        foreach ($assessments as $assessment) {
            $total += $assessment->mark;
        }
        if ($assessments->count() > 0) {
            $average = $total / $assessments->count();
        }

        return $average;
    }
}
