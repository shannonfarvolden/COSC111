<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideSet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slide_set',
        'topic',
        'week',
        'category',
    ];

    /**
     * A Slide Set has many Slides.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function slides()
    {
        return $this->hasMany('App\Slide');
    }

    /**
     * A Slide Set has many Videos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()
    {
        return $this->hasMany('App\Video');
    }
}
