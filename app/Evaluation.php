<?php

namespace App;

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
     * @return int
     */
    public function evaluationTotal(User $user)
    {

        $evaluationTotal = 0;

        foreach ( $this->submissions as $submission )
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
     * @return int
     */
    public function userTotalMark(User $user)
    {

        $userTotalMark = 0;
        foreach ( $this->submissions as $submission )
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
    public function userPercentage(User $user)
    {
        return round($this->userTotalMark($user) / $this->evaluationTotal($user), 4) * 100;
    }

    /**
     * Returns a specific users percentage of the final so far.
     *
     * @param \App\User $user
     * @return float
     */
    public function userFinalPercentage(User $user)
    {
        return round(($this->userTotalMark($user) / $this->evaluationTotal($user)) * $this->grade, 1);
    }

    /**
     * Returns the risk level for a given user's in the evaluation category.
     *
     * @param \App\User $user
     * @return string
     */
    public function userStanding(User $user)
    {
        if ($this->userPercentage($user) < 55)
            return 'danger';
        elseif ($this->userPercentage($user) >= 55 && $this->userPercentage($user) < 70)
            return 'warning';
        else
            return 'success';
    }

    public function riskArray(){
        //get all users that are students
        $users = User::where('admin', 0)->get();
        //create a collection
        $studentrisk = collect([]);
        // loop through students
        foreach($users as $key=>$user){
            //add userid and risk factor to collection
            if ($this->evalGradeExists($user)){
                $studentrisk=$studentrisk->push(collect(['user_id'=>$user->id, 'standing'=>$this->userStanding($user)]));
            }
        }

       return $studentrisk->values();
    }
    public function risk($risk){
        $studentrisk = $this->riskArray();

        return $studentrisk->where('standing', $risk);;
    }

    public function evalGradeExists(User $user)
    {
        $list = $this->submissions()->pluck('id');
        $userGrade = $user->grades()->whereIn('submission_id', $list)->get();
        return !$userGrade->isEmpty();

    }

}
