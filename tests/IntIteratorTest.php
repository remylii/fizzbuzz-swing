<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use FizzBuzzSwing\IntIterator;

class IntIteratorTest extends TestCase
{
    public function testGetIterator()
    {
        $obj = new IntIterator(100);
        $this->assertTrue(is_iterable($obj));
    }
}
