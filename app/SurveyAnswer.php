<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_question_id',
        'answer'
    ];

    /**
     * A survey answer belongs to a question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function question()
    {
        return $this->belongsTo('App\SurveyQuestion', 'survey_question_id');
    }

    /**
     * Get the users who have given this answer in a survey.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'survey_user', 'survey_answer_id', 'user_id');
    }
}
