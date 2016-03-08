<?php

namespace App\Data\Enums;

class CRUDPermitsRule extends SplEnum 
{
    const __default = self::CREATE;
    
    const CREATE = 1 << 0;
    const READ = 1 << 1;
    const UPDATE = 1 << 2;
    const DISABLE = 1 << 3;
    const READOWN = 1 << 4;
    const UPDATEOWN = 1 << 5;

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