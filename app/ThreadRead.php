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
}
