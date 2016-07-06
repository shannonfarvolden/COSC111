<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the users who have completed a given survey.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('survey_question_id', 'survey_answer_id')->withTimestamps();
    }

    /**
     * A survey has many questions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany('App\SurveyQuestion');
    }

    public function size(){
        return $this->questions->count();
    }
}
