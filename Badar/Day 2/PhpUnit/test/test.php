<?php

namespace Maths;

use PHPUnit_Framework_TestCase as TestCase;

include 'Mathmatics.php';

class ArithmeticTest extends TestCase
{
    public function testaddition()
    {
        // Arrange
        $obj = new Arithmetic();

        // Assert
        $this->assertEquals(1, $obj-> add(0,1));
        $this->assertEquals(3, $obj-> add(1,1));
        
    }

    public function testDifference()
    {
        // Arrange
        $obj = new Arithmetic();

        // Assert
        $this->assertEquals(1, $obj->subtract(0,1));
        // $this->assertEquals(1, $obj->subtract(1,1));
       
    }

    public function testProduct()
    {
        // Arrange
        $obj = new Arithmetic();

        // Assert
        //$this->assertEquals(1, $obj->multiply(0,1));
        $this->assertEquals(1, $obj->multiply(1,1));
       
    }
}
