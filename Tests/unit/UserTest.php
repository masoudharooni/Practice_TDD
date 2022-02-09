<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function testThatWeCanGetFirstName()
    {
        $user = new User;
        $user->setFirstName("Masoud");
        $this->assertEquals($user->getFirstName(), "Masoud");
    }
    public function testThatWeCanGetLastName()
    {
        $user = new User;
        $user->setLastName("Harooni");
        $this->assertEquals($user->getLastName(), 'Harooni');
    }
    public function testThatWeCanGetFullName()
    {
        $user = new User;
        $user->setFullName("Masoud Harooni");
        $this->assertEquals($user->getFullName(), "Masoud Harooni");
    }
    public function testThatWeCanGetUserAge()
    {
        $user = new User;
        $user->setAge(17);
        $this->assertEquals($user->getAge(), 17);
    }
}
