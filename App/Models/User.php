<?php

namespace App\Models;

use App\Hellper;

class User
{
    private string $first_name;
    private string $last_name;
    private string $full_name;
    private string $age;
    /**
     * Dynamic call setter and getter methods
     */
    public function __call($methodName, $arguments)
    {
        $propertyName = Hellper::convertPascalCaseToSnakeCase(substr($methodName, 3));
        if (property_exists($this, $propertyName)) {
            if (substr($methodName, 0, 3) == "set") {
                $this->$propertyName = trim($arguments[0]);
            } elseif (substr($methodName, 0, 3) == "get") {
                return $this->$propertyName;
            }
        }
    }
}
