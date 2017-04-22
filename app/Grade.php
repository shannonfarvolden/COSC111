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
        'feedback'
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
    /**
     * Return letter grade given a mark.
     *
     * @param $mark
     * @return string
     */
    public function letterGrade($mark){
        if($mark<50)
            return 'F';
        else if($mark<55)
            return 'D';
        else if($mark<60)
            return 'C-';
        else if($mark<64)
            return 'C';
        else if($mark<68)
            return 'C+';
        else if($mark<72)
            return 'B-';
        else if($mark<76)
            return 'B';
        else if($mark<80)
            return 'B+';
        else if($mark<85)
            return 'A-';
        else if($mark<90)
            return 'A';
        else
            return 'A+';
    }
}
