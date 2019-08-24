<?php
namespace FizzBuzzSwing;

use FizzBuzzSwing\Libs\FizzBuzzInterface;
use FizzBuzzSwing\Response;
use FizzBuzzSwing\IntIterator;

class Main implements FizzBuzzInterface
{
    use Libs\FizzBuzzTrait;

    /** @var \IteratorAggregate */
    private $iterator;

    public function __construct(int $n)
    {
        if ($n <= 0) {
            throw new \InvalidArgumentException();
        }
        $this->iterator = new IntIterator($n);
    }

    public function boot()
    {
        foreach ($this->iterator as $val) {
            $content = $this->fizzbuzz($val);
            Response::output($content);

            unset($content);
        }
    }
}
