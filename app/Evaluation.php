<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Evaluation extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'grade',
    ];

    /**
     * A evaluation can have many submissions associated with it.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function submissions()
    {
        return $this->hasMany('App\Submission');
    }

    /**
     * Returns true if the evaluation has no submissions(assignments, labs, etc.) created for it yet.
     *
     * @return bool
     */
    public function evalEmpty()
    {
        $users = User::where('admin', 0)->get();
        $evalEmpty = true;
        foreach ( $users as $user )
        {
            if ($this->evalGradeExists($user)){
                $evalEmpty = false;
                break;
            }
        }
        return $evalEmpty;
    }

    /**
     * Returns the minimum mark for this evaluation.
     *
     * @return float|int
     */
    public function evalMin()
    {
        $users = User::where('admin', 0)->get();
        $min = 100;
        foreach ( $users as $user )
        {
            if ($this->evalGradeExists($user))
            {
                if ($this->userPercentage($user) < $min)
                {
                    $min = $this->userPercentage($user);
                }
            }

        }
        return $min;

    }

    /**
     * Returns max mark for an evaluation.
     *
     * @return float|int
     */
    public function evalMax()
    {
        $users = User::where('admin', 0)->get();
        $max = 0;

        foreach ( $users as $user )
        {
            if ($this->evalGradeExists($user))
            {
                if ($this->userPercentage($user) > $max)
                {
                    $max = $this->userPercentage($user);
                }

            }

        }

        return $max;
    }

    /**
     * Returns median grade of an evaluation.
     *
     * @return float|int|mixed
     */
    public function evalMedian()
    {
        $users = User::where('admin', 0)->get();
        $marks = [];
        foreach ( $users as $user )
        {
            if ($this->evalGradeExists($user))
            {
                array_push($marks,$this->userPercentage($user));


            }
        }
       sort($marks);

        $count = count($marks); //total numbers in array
        $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
        if($count % 2) { // odd number, middle is the median
            $median = $marks[$middleval];
        } else { // even number, calculate avg of 2 medians
            $low = $marks[$middleval];
            $high = $marks[$middleval+1];
            $median = (($low+$high)/2);
        }
        return $median;
    }

    /**
     * Returns average grade for an evaluation.
     *
     * @return float
     */
    public function evalAvg()
    {
        $users = User::where('admin', 0)->get();
        $marks = [];
        foreach ( $users as $user )
        {
            if ($this->evalGradeExists($user))
            {
                array_push($marks,$this->userPercentage($user));


            }
        }
        $count = count($marks); //total numbers in array
        $total = 0;
        foreach ($marks as $mark) {
            $total += $mark; // total value of array numbers
        }
        $average = ($total/$count); // get average value
        return round($average,2);

    }


    /**
     * Returns total mark for an evaluation.
     *
     * @param \App\User $user
     * @param Collection|null $submissions
     * @return int
     */
    public function evaluationTotal(User $user, Collection $submissions = null)
    {

        $evaluationTotal = 0;
        if(!$submissions){
            $submissions = $this->submissions;
        }
        foreach ( $submissions as $submission )
        {
            $userGrade = $submission->grades()->where('user_id', $user->id);
            if ($userGrade->exists())
            {
                if (!$submission->bonus)
                {
                    $evaluationTotal += $submission->total;
                }

            }
        }

        return $evaluationTotal;
    }

    /**
     * Returns user total mark for an evaluation.
     *
     * @param \App\User $user
     * @param Collection|null $submissions
     * @return int
     */
    public function userTotalMark(User $user,  Collection $submissions = null)
    {

        $userTotalMark = 0;
        if(!$submissions){
            $submissions = $this->submissions;
        }
        foreach ( $submissions as $submission )
        {
            $userGrade = $submission->grades()->where('user_id', $user->id);
            if ($userGrade->exists())
            {
                $userTotalMark += $userGrade->get()->first()->mark;

            }
        }

        return $userTotalMark;
    }

    /**
     * Returns a specific users average percentage for an evaluation.
     *
     * @param \App\User $user
     * @return float
     */
    public function userPercentage(User $user, Collection $submissions = null)
    {
        return round($this->userTotalMark($user, $submissions) / $this->evaluationTotal($user, $submissions), 4) * 100;
    }

    /**
     * Returns a specific users percentage of the final so far.
     *
     * @param \App\User $user
     * @return float
     */
    public function userFinalPercentage(User $user, Collection $submissions = null)
    {
        return round(($this->userTotalMark($user, $submissions) / $this->evaluationTotal($user, $submissions)) * $this->grade, 1);
    }

    /**
     * Returns the risk level for a given user's in the evaluation category.
     *
     * @param \App\User $user
     * @return string
     */
    public function userStanding(User $user, Collection $submissions = null)
    {
        if ($this->userPercentage($user, $submissions) < 55)
            return 'danger';
        elseif ($this->userPercentage($user, $submissions) >= 55 && $this->userPercentage($user, $submissions) < 70)
            return 'warning';
        else
            return 'success';
    }

    public function riskArray( Collection $submissions = null){
        //get all users that are students
        $users = User::where('admin', 0)->get();
        //create a collection
        $studentrisk = collect([]);
        // loop through students
        foreach($users as $key=>$user){
            //add userid and risk factor to collection
            if ($this->evalGradeExists($user, $submissions)){
                $studentrisk=$studentrisk->push(collect(['user_id'=>$user->id, 'standing'=>$this->userStanding($user)]));
            }
        }

       return $studentrisk->values();
    }
    public function risk($risk, Collection $submissions = null){

        $studentrisk = $this->riskArray($submissions);

        return $studentrisk->where('standing', $risk);
    }

    public function evalGradeExists(User $user, Collection $submissions = null)
    {
        if(!$submissions){
            $submissions = $this->submissions;
        }
        $list = $submissions->pluck('id');
        $userGrade = $user->grades()->whereIn('submission_id', $list)->get();
        return !$userGrade->isEmpty();

    }

}
