<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadRead extends Model
{
    protected $table = 'threads_read';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'thread_id',
    ];
    /**
     * A thread read belongs to a thread
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
    /**
     * A thread read belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
