<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testsFailur()
    {
        $this->assertEquals(5, 2 + 3);
    }
    /**
     * @test
     */
    public function twoPlusTwo()
    {
        $this->assertEquals(4, 4);
    }
}
