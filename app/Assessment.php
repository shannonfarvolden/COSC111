<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'evaluator',
        'evaluatee',
        'peer_evaluation_id',
        'mark',
        'feedback',
    ];
    /**
     * An assessment belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evaluator()
    {
        return $this->belongsTo('App\User', 'evaluator');
    }
    /**
     * An assessment belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evaluatee()
    {
        return $this->belongsTo('App\User', 'evaluatee');
    }
    /**
     * An assessment belongs to a peer evaluation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peerevaluation()
    {
        return $this->belongsTo('App\PeerEvaluation', 'peer_evaluation_id');
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
