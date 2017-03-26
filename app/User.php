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
        'lab',
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
     *  Scope a query to only include student users.
     *
     * @param $query
     * @return mixed
     */
    public function scopeStudents($query)
    {
        return $query->where('admin', 0);
    }

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
     * A User can write many quizzes.
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
     * A User can read many threads.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threadsRead()
    {
        return $this->hasMany('App\ThreadRead');

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

    /**
     * Get the teams a user belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }

    /**
     * Check if user has a team.
     *
     * @return bool
     */
    public function hasTeam()
    {
        return !$this->teams->isEmpty();
    }

    /**
     * Get users team members, not including him/her self.
     *
     * @return mixed
     */
    public function teamMembers()
    {
        return $this->teams()->first()->users()->whereNotIn('id', [$this->id])->get();
    }

    /**
     * Check if another user is a team member of this user.
     *
     * @param $user_id
     * @return bool
     */
    public function isTeamMember($user_id)
    {
        return !$this->teamMembers()->whereLoose('id', $user_id)->isEmpty();

    }

    /**
     * A User can be the evaluator of many assessments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluator()
    {
        return $this->hasMany('App\Assessment', 'evaluator');
    }

    /**
     * A User can be the evaluatee of many assessments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluatee()
    {
        return $this->hasMany('App\Assessment', 'evaluatee');
    }

    /**
     * Checks if student has made a submission yet.
     *
     * @param $id
     * @return bool
     */
    public function hasSubmissionAttempt($id)
    {
        return !$this->submissions()->where('id', $id)->get()->isEmpty();
    }

    /**
     * Gets last submission made.
     *
     * @param $id
     * @return mixed
     */
    public function lastSubmissionMade($id)
    {
        return $this->submissions()->where('id', $id)->get()->last();
    }

    /**
     * Checks if student has taken a quiz.
     *
     * @param $id
     * @return bool
     */
    public function hasQuizAttempt($id)
    {
        return !$this->quizzes()->where('id', $id)->get()->isEmpty();
    }

    /**
     * Returns max quiz mark that student has gotten.
     *
     * @param $id
     * @return mixed
     */
    public function maxQuizMark($id)
    {
        $max = 0;
        $quizzes = $this->quizzes()->where('id', $id)->get();
        foreach($quizzes as $quiz){
            if($quiz->pivot->score > $max){
                $max = $quiz->pivot->score;
            }
        }
        return $max;
    }
    /**
     * Returns last quiz that student has taken.
     *
     * @param $id
     * @return mixed
     */
    public function lastQuizTaken($id)
    {
        return $this->quizzes()->where('id', $id)->get()->last();
    }

    /**
     * Adds a specified amount of time before students can retake a quiz.
     *
     * @param $id
     * @return mixed
     */
    public function retakeQuiz($id)
    {
        return $this->lastQuizTaken($id)->pivot->created_at->addHour();
    }

    /**
     * Checks if student can retake a quiz.
     *
     * @param $id
     * @return mixed
     */
    public function canRetakeQuiz($id)
    {
        return $this->retakeQuiz($id)->isPast();
    }

    /**
     * Amount of time before student can retake quiz
     *
     * @param $id
     * @return mixed
     */
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
        return !$this->surveys()->where('id', $id)->get()->isEmpty();
    }

    /**
     * Get a students submission mark.
     *
     * @param $id
     * @return mixed
     */
    public function submissionMark($id)
    {

        return $this->grades()->where('submission_id', $id)->get()->last()->mark;

    }

    /**
     * Has read a thread before.
     *
     * @param Thread $thread
     * @return mixed
     */
    public function hasReadThread(Thread $thread)
    {
        return $this->threadsRead->contains('thread_id', $thread->id);
    }

    /**
     * Has a new reply that the user has not read.
     *
     * @param Thread $thread
     * @return bool
     */
    public function hasNewReply(Thread $thread)
    {
        if ($this->hasReadThread($thread))
            if (!$this->threadsRead()->where('thread_id', $thread->id)->get()->first()->thread->replies->isEmpty())
                return $this->threadsRead()->where('thread_id', $thread->id)->get()->first()->thread->replies->last()->created_at > $this->threadsRead()->where('thread_id', $thread->id)->get()->first()->updated_at;
        return false;
    }

}
