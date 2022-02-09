<?php

namespace App\Models;

class User
{
    private string $first_name;
    private string $last_name;
    private string $full_name;
    private string $age;
    public function __call($methodName, $arguments)
    {
        $propertyName = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', substr($methodName, 3)));
        if (property_exists($this, $propertyName)) {
            if (substr($methodName, 0, 3) == "set") {
                $this->$propertyName = trim($arguments[0]);
            } elseif (substr($methodName, 0, 3) == "get") {
                return $this->$propertyName;
            }
        }
    }
}
