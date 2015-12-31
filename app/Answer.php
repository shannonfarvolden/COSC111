<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $primaryKey = ['number', 'question_number', 'quiz_number'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'quiz_number',
        'question_number',
        'answer',
        'correct',
    ];
    /**
     * An answer belongs to a quiz.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz', 'quiz_number', 'number');
    }
    /**
     * An answer belongs to a question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function question()
    {
        return $this->belongsTo('App\Question', 'question_number', 'number');
    }

}
