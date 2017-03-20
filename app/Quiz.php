<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'active',
        'total'
    ];

    /**
     * Get the users who have written a given quiz.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('score', 'attempt')->withTimestamps();
    }

    /**
     * A quiz has many questions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function quizTotal(User $user){

    }

    public function userTotalMark(){

    }
    public function userPercentage(){

    }
    public function userFinalPercentage(){

    }



}
