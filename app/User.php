<?php

namespace App;

use Illuminate\Foundation\Auth\User as BaseUser;

class User extends BaseUser
{
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
        return $this->belongsToMany('App\Quiz', 'quiz_user', 'user_id', 'quiz_number')->withPivot('score', 'attempt')->withTimestamps();
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
    public function hasSubmissionAttempt($submission_name)
    {
        return !$this->submissions->where('name', $submission_name)->isEmpty();
    }
    /**
     * A user can have one survey.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function survey()
    {
        return $this->hasOne('App\Survey');
    }

    public function hasQuizAttempt($quiz_number)
    {
        return !$this->quizzes->whereLoose('number', $quiz_number)->isEmpty();
    }
    public function lastQuizTaken($quiz_number)
    {
        return $this->quizzes->whereLoose('number', $quiz_number)->last();
    }

    public function retakeQuiz($quiz_number)
    {

        return $this->lastQuizTaken($quiz_number)->pivot->created_at->addHours(24);
    }

    public function canRetakeQuiz($quiz_number)
    {
        return  $this->retakeQuiz($quiz_number)->isPast();
    }

    public function timeTillRetake($quiz_number){
        return $this->retakeQuiz($quiz_number)->diffForHumans();
    }


}
