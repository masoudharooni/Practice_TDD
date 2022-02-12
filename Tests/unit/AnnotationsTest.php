<?php

use PHPUnit\Framework\TestCase;


class Annotations extends TestCase
{
    protected $value;
    public function testCheckCorrectValue()
    {
        $this->value++;
        $this->assertEquals(1, $this->value);
        return $this->value;
    }
    /**
     * @depends testCheckCorrectValue
     */
    public function testCheckCorrectValue2($value)
    {
        $value++;
        $this->assertEquals(2, $value);
    }

    /**
     * @dataProvider numberProvider
     */
    public function testCheckCorrectNumbers($number)
    {
        $this->assertTrue($number > 0);
    }

    public function numberProvider()
    {
        return [
            [1],
            [2],
            [3],
            [4],
            [5],
            [6]
        ];
    }
}
