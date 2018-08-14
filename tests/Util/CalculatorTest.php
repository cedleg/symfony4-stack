<?php
/**
 * Created by PhpStorm.
 * User: cedric
 * Date: 13/08/18
 * Time: 22:02
 */

namespace Tests;

use App\util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}