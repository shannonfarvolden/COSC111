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
}
