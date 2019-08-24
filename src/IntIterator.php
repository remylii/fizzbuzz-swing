<?php
namespace FizzBuzzSwing;

class IntIterator implements \IteratorAggregate
{
    /** @var int */
    private $limit;

    /**
     * Constructor, sets loop length.
     */
    public function __construct(int $n)
    {
        $this->limit = $n;
    }

    public function getIterator()
    {
        $count = 1;
        while (true) {
            if ($count > $this->limit) {
                break;
            }

            yield $count;

            $count++;
        }
    }
}
