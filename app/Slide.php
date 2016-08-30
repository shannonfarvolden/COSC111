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
        'slide_set_id',
        'slide_number',
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
     * A Slide belongs to a Slide Set
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function slideSet()
    {
        return $this->belongsTo('App\SlideSet');
    }

    public function delete(){
        \File::delete([
            $this->path,
            $this->thumbnail_path
        ]);

        parent::delete();
    }


}
