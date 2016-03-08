<?php

namespace App\Data\Enums;

class PermitsEditRule extends SplEnum 
{
    const __default = self::CREATE;
    
    const ADMPERMITS = 1 << 0;
    const MEDPERMITS = 1 << 1;
    const PACPERMITS = 1 << 2;
    const GUEPERMITS = 1 << 3;

    /**
     * Get const variable name.
     * @param integer $value
     * 
     * @return string
     */
    public static function toString($value)
    {
        $class = new ReflectionClass(__CLASS__);
        $constants = array_flip($class->getConstants());

        return $constants[$value];
    }
}