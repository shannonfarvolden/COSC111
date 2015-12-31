<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
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
     * An answer belongs to a question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
}
