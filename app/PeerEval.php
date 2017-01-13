<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeerEval extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'evaluator',
        'evaluatee',
        'submission_id',
        'mark',
        'feedback',
    ];
    /**
     * A peer eval belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evaluator()
    {
        return $this->belongsTo('App\User', 'evaluator');
    }
    /**
     * A peer eval belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evaluatee()
    {
        return $this->belongsTo('App\User', 'evaluatee');
    }
    /**
     * A peer eval belongs to a submission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function submission()
    {
        return $this->belongsTo('App\Submission');
    }

    /**
     * Cast the mark attribute to float (removes unnecessary zeros)
     * @param $num
     * @return float
     */
    public function getMarkAttribute($num){
        return (float)$num;

    }
}
