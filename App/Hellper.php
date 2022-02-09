<?php

namespace App;

class Hellper
{
    public static function convertPascalCaseToSnakeCase($string)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $string));
    }
}
