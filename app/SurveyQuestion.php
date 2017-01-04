<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id',
        'question',
    ];

    /**
     * A survey question belongs to a survey.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }

    /**
     * A survey question has many answers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('App\SurveyAnswer');
    }



}
