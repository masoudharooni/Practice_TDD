<?php

use PHPUnit\Framework\TestCase;


class Annotations extends TestCase
{
    private $value;
    /**
     * @before
     */
    public function testAddSomeValue()
    {
        $this->value = 5;
    }
    public function testCheckCurrectValue()
    {
        $this->value++;
        $this->assertEquals(1, $this->value);
    }
}
