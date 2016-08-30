<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'due_date',
        'total',
        'evaluation_id',
        'active',
        'bonus'
    ];

    /** Set date attributes as Carbon instances */
    protected $dates = ['due_date'];

    /**
     * Get the users who have written a given submission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('file_name', 'file_path', 'attempt', 'comments')->withTimestamps();
    }
    /**
     * A submission can have many grades associated with it.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany('App\Grade');
    }

    /**
     * Set due date attribute
     *
     * @param $date
     */
    public function setDueDateAttribute($date){
        $this->attributes['due_date'] = Carbon::parse($date);
    }

    /**
     * A grade belongs to an evaluation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evaluation()
    {
        return $this->belongsTo('App\Evaluation');
    }

    /**
     * Calculate class average of submission.
     *
     * @return float
     */
    public function average(){

        return ($this->grades->sum('mark')/$this->grades->count())/$this->total * 100;

    }
}
