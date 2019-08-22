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

    /**
     *
     * @dataProvider outputProvider
     */
    public function testOutput($expected, $params)
    {
        ob_start();

        $m = new Main();
        foreach ($params as $val) {
            $m->output($val);
        }

        $output_contents = ob_get_clean();

        $this->assertEquals($expected, $output_contents);
    }

    public function outputProvider(): array
    {
        return [
            ['Fizz', ['Fizz']],
            ['12Fizz4Buzz', [1, 2, 'Fizz', 4, 'Buzz']],
            ['12345', [1, 2, 3, 4, 5]],
        ];
    }
}
