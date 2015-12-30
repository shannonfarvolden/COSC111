<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'thread_id',
        'body',
        'anonymous',
    ];

    /**
     * A reply belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * A reply belongs to a thread
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
}
