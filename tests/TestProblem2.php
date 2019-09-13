<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use ProjectEuler\Problem2;

class TestProblem2 extends TestCase
{
    public function testTenFibonacciSum()
    {
        $this->assertEquals(10,Problem2::solve(10));
    }
    
}



?>