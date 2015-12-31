<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $primaryKey = ['number', 'quiz_number'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'quiz_number',
        'question',
    ];
    /**
     * A question belongs to a quiz.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz', 'quiz_number', 'number');
    }
    /**
     * A question has many answers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('App\Answer', 'question_number', 'number');
    }
}