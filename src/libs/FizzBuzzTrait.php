<?php
namespace FizzBuzzSwing\Libs;

trait FizzBuzzTrait
{
    public function fizzbuzz(int $n): string
    {
        $res = '';
        if ($n%3 === 0) {
            $res .= 'Fizz';
        }

        if ($n%5 === 0) {
            $res .= 'Buzz';
        }

        if ($res === '') {
            $res = (string)$n;
        }

        return $res;
    }
}
