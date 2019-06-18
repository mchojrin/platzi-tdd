<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 8, $sut->add( 5, 3 ) );
        $this->assertEquals( 1, $sut->add( 1, 0 ) );
        $this->assertEquals( 0, $sut->add( 5, -5 ) );
    }
}
