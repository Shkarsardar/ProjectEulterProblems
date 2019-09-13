<?php

use PHPUnit\Framework\TestCase;
use ProjectEuler\Problem3;

class TestProblem3 extends TestCase
{
    public function testGetGreatFactor()
    {
        $number=600851475143;

        $this->assertEquals(6857,Problem3::solve($number));
    }
    public function testGetGreatFactorOf20()
    {
        $number = 20;

        $this->assertEquals(5, Problem3::solve($number));
    }
    public function testGetGreatFactorOf13195()
    {
        $number = 13195;

        $this->assertEquals(29, Problem3::solve($number));
    }
    public function testGetGreatFactorOf48()
    {
        $number = 48;

        $this->assertEquals(3, Problem3::solve($number));
    }
    public function testGetGreatFactorOfPrimeNumber()
    {
        $number = 17;

        $this->assertEquals(17, Problem3::solve($number));
    }
    
    
}

?>