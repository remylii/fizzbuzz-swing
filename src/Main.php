<?php
namespace FizzBuzzSwing;

use FizzBuzzSwing\Libs\FizzBuzzInterface;
use FizzBuzzSwing\Response;

class Main implements FizzBuzzInterface
{
    use Libs\FizzBuzzTrait;

    public function boot()
    {
        for ($i = 1; $i <= 15; $i++) {
            $content = $this->fizzbuzz($i);
            Response::output($content);

            unset($content);
        }
    }
}
