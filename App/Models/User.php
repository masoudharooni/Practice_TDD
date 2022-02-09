<?php

namespace App\Models;

class User
{
    private string $first_name;
    private string $last_name;
    public function setFirstName(string $firstName)
    {
        $this->first_name = trim($firstName);
    }
    public function getFirstName()
    {
        return $this->first_name;
    }
    public function setLastName(string $lastName)
    {
        $this->last_name = trim($lastName);
    }
    public function getLastName()
    {
        return $this->last_name;
    }
    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
