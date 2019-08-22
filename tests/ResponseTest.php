<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use FizzBuzzSwing\Response;

class ResponseTest extends TestCase
{
    /**
     *
     * @dataProvider outputProvider
     */
    public function testOutput($expected, $params)
    {
        ob_start();
        foreach ($params as $val) {
            Response::output($val);
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
