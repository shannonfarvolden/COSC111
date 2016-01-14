<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'due_date',
        'total',
        'active',
    ];
    /**
     * Get the users who have written a given submission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('file_name', 'file_path', 'attempt', 'comments')->withTimestamps();
    }
    /**
     * A submission can have many grades associated with it.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany('App\Grade');
    }
}
