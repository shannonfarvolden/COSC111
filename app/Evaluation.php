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

    public function evalEmpty()
    {
        $users = User::where('admin', 0)->get();
        $evalEmpty = true;
        foreach ( $users as $user )
        {
            if ($this->evaluationTotal($user) > 0){
                $evalEmpty = false;
                break;
            }
        }
        return $evalEmpty;
    }

    public function evalMin()
    {
        $users = User::where('admin', 0)->get();
        $min = 100;
        foreach ( $users as $user )
        {
            if ($this->evaluationTotal($user) > 0)
            {
                if ($this->userPercentage($user) < $min)
                {
                    $min = $this->userPercentage($user);
                }
            }

        }
        return $min;

    }

    public function evalMax()
    {
        $users = User::where('admin', 0)->get();
        $max = 0;

        foreach ( $users as $user )
        {
            if ($this->evaluationTotal($user) > 0)
            {
                if ($this->userPercentage($user) > $max)
                {
                    $max = $this->userPercentage($user);
                }

            }

        }

        return $max;
    }

    public function evalMedian()
    {
        $users = User::where('admin', 0)->get();
        $marks = [];
        foreach ( $users as $user )
        {
            if ($this->evaluationTotal($user) > 0)
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

    public function evalAvg()
    {
        $users = User::where('admin', 0)->get();
        $marks = [];
        foreach ( $users as $user )
        {
            if ($this->evaluationTotal($user) > 0)
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

    public function userPercentage(User $user)
    {
        return round($this->userTotalMark($user) / $this->evaluationTotal($user), 4) * 100;
    }

    public function userFinalPercentage(User $user)
    {
        return round(($this->userTotalMark($user) / $this->evaluationTotal($user)) * $this->grade, 1);
    }

    public function userStanding(User $user)
    {

        if ($this->userTotalMark($user) < 55)
            return 'danger';
        elseif ($this->userPercentage($user) >= 55 && $this->userPercentage($user) < 70)
            return 'warning';
        else
            return 'success';
    }

}
