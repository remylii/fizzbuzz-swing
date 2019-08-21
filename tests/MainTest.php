<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use FizzBuzzSwing\Main;

class MainTest extends TestCase
{
    public function testMain()
    {
        ob_start();

        $m = new Main();
        $m->boot();

        $output_contents = ob_get_clean();

        $this->assertEquals("12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz", $output_contents);
    }
}
