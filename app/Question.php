<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quiz_id',
        'question',
    ];

    /**
     * A question belongs to a quiz.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }

    /**
     * A question has many answers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
