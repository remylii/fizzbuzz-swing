<?php
namespace FizzBuzzSwing;

use FizzBuzzSwing\Libs\FizzBuzzInterface;
use FizzBuzzSwing\Response;

class Main implements FizzBuzzInterface
{
    use Libs\FizzBuzzTrait;

    /** @var int */
    private $limit;

    public function __construct(int $n)
    {
        $this->limit = $n;
    }

    public function boot()
    {
        for ($i = 1; $i <= $this->limit; $i++) {
            $content = $this->fizzbuzz($i);
            Response::output($content);

            unset($content);
        }
    }
}
