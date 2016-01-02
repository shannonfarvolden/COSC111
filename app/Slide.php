<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;

class Slide extends Model
{
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

    public function makeThumbnail(){
        Image::make('public/'.$this->image_path)
            ->fit(360, 270)
            ->save('public/'.$this->thumbnail_path);
    }

}
