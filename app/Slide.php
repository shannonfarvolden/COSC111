<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;

class Slide extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slide_set',
        'lecture',
        'slide_number',
        'topic',
        'image_path',
        'thumbnail_path',
    ];

    /**
     * Generates a thumbnail image of the slide uploaded.
     */
    public function makeThumbnail()
    {
        Image::make($this->image_path)
            ->fit(360, 270)
            ->save($this->thumbnail_path);
    }

    /**
     * Query scope for finding slide sets in a given week.
     * @param $query
     * @param $week
     * @return mixed
     */
    public function scopeSlideSet($query, $week)
    {
       return $query->where('lecture', $week)->orderBy('slide_set', 'asc');
    }


}
