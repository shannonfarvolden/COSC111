<?php

namespace App\Http\Utilities;

class Lab
{

    protected static $labs = [
        'L2A' => 'L2A',
        'L2B' => 'L2B',
        'L2C' => 'L2C'
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