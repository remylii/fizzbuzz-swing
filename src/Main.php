<?php
namespace FizzBuzzSwing;

use FizzBuzzSwing\Libs\FizzBuzzInterface;

class Main implements FizzBuzzInterface
{
    use Libs\FizzBuzzTrait;

    public function boot()
    {
        for ($i = 1; $i <= 15; $i++) {
            $content = $this->fizzbuzz($i);

            $this->output($content);
        }
    }

    public function output($content)
    {
        echo $content;
    }
}
