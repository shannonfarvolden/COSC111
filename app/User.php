<?php

namespace App;

use Illuminate\Foundation\Auth\User as BaseUser;

class User extends BaseUser {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'student_number',
        'email',
        'password',
        'consent',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * A user can have many threads.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threads()
    {
        return $this->hasMany('App\Thread');
    }

    /**
     * A user can make many replies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    /**
     * A user can have many grades.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany('App\Grade');
    }

    /**
     * Get the quizzes written by a given user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quizzes()
    {
        return $this->belongsToMany('App\Quiz')->withPivot('score', 'attempt')->withTimestamps();
    }

    /**
     * Get the surveys taken by a given user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function surveys()
    {
        return $this->belongsToMany('App\Survey')->withPivot('survey_question_id', 'survey_answer_id')->withTimestamps();
    }

    /**
     * Get the submissions made by a given user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->belongsToMany('App\Submission')->withPivot('file_name', 'file_path', 'attempt', 'comments')->withTimestamps();
    }

    public function hasSubmissionAttempt($id)
    {
        return !$this->submissions->whereLoose('id', $id)->isEmpty();
    }

    public function lastSubmissionMade($id)
    {
        return $this->submissions->whereLoose('id', $id)->last();
    }

    public function hasQuizAttempt($id)
    {
        return !$this->quizzes->whereLoose('id', $id)->isEmpty();
    }

    public function lastQuizTaken($id)
    {
        return $this->quizzes->whereLoose('id', $id)->last();
    }

    public function retakeQuiz($id)
    {

        return $this->lastQuizTaken($id)->pivot->created_at->addHour();
    }

    public function canRetakeQuiz($id)
    {
        return $this->retakeQuiz($id)->isPast();
    }

    public function timeTillRetake($id)
    {
        return $this->retakeQuiz($id)->diffForHumans();
    }

    /**
     * Checks to see if user has completed a given survey.
     *
     * @param $id
     * @return bool
     */
    public function surveyComplete($id)
    {
        return !$this->surveys()->where('id',$id)->get()->isEmpty();
    }
}
