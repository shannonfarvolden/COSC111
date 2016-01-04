<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $primaryKey = 'number';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'name',
        'chapters',
        'active',
    ];


    /**
     * Get the users who have written a given quiz.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'quiz_user', 'quiz_number', 'user_id')->withPivot('score', 'attempt')->withTimestamps();
    }
    /**
     * A quiz has many questions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany('App\Question', 'quiz_number', 'number');
    }

}
