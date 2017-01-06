<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slide_set_id',
        'name',
        'link',
        'order'
    ];

    /**
     * A Video belongs to a Slide Set
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function slideSet()
    {
        return $this->belongsTo('App\SlideSet');
    }
}
