<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testMain()
    {
        ob_start();

        require_once(__DIR__ . '/../src/main.php');

        $output_contents = ob_get_clean();

        $this->assertEquals("12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz", $output_contents);
    }
}
