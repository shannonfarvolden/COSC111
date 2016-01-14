<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'submission_id',
        'mark',
        'feedback',
    ];
    /**
     * A grade belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * A grade belongs to a submission.
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
