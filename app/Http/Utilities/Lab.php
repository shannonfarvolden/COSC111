<?php

namespace App\Http\Utilities;

class Lab
{
    // lab code => name
    protected static $labs = [
        'L2A'=>'L2A',
        'L2B'=>'L2B',
        'L2C'=>'L2C'
    ];



public static function all(){
    return static::$labs;
}
}