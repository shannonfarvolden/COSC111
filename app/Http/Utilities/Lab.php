<?php

namespace App\Http\Utilities;

class Lab
{

    protected static $labs = [
        'L2A' => 'L2A',
        'L2B' => 'L2B',
        'L2C' => 'L2C',
        'L2D' => 'L2D',
        'L2E' => 'L2E'
    ];

    /**
     * Get all labs.
     *
     * @return array
     */
    public static function all()
    {
        return static::$labs;
    }
}
