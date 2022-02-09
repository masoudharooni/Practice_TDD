<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testsFailur()
    {
        $this->assertEquals(5, 2 + 32);
    }
    /**
     * @test
     */
    public function twoPlusTwo()
    {
        $this->assertEquals(4, 44);
    }
}
