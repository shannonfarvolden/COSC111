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
     * Get the submissions that belong to a peer evaluation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function submissions()
    {
        return $this->belongsToMany('App\Submission')->withPivot('score', 'attempt')->withTimestamps();
    }
}
