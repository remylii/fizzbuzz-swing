<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class FizzBuzzTraitTest extends TestCase
{
    /**
     *
     * @dataProvider fizzbuzzProvider
     */
    public function testFizzbuzz($expected, $value)
    {
        $obj = new class {
            use \FizzBuzzSwing\Libs\FizzBuzzTrait;
        };

        $this->assertEquals($expected, $obj->fizzbuzz($value));
    }

    public function fizzbuzzProvider(): array
    {
        return [
            ["1", 1],
            ["Fizz", 3],
            ["Buzz", 5],
            ["FizzBuzz", 15],
            ["Fizz", 99999],
        ];
    }
}
