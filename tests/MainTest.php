<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use FizzBuzzSwing\Main;

class MainTest extends TestCase
{
    public function testBoot()
    {
        ob_start();

        $m = new Main();
        $m->boot();

        $output_contents = ob_get_clean();

        $this->assertEquals("12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz", $output_contents);
    }

    public function testFizzbuzz()
    {
        $m = new Main();
        $this->assertEquals(1, $m->fizzbuzz(1));
        $this->assertEquals('Fizz', $m->fizzbuzz(3));
        $this->assertEquals('Buzz', $m->fizzbuzz(5));
        $this->assertEquals('FizzBuzz', $m->fizzbuzz(15));
        $this->assertEquals('Fizz', $m->fizzbuzz(99999));
    }
}
