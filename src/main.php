<?php
namespace FizzBuzzSwing;

class Main
{
    public function fizzbuzz()
    {
        for ($i = 1; $i <= 15; $i++) {
            $result = '';

            if ($i%3 === 0) {
                $result .= 'Fizz';
            }

            if ($i%5 === 0) {
                $result .= 'Buzz';
            }

            if ($result === '') {
                $result = $i;
            }

            echo $result;
            unset($result);
        }
    }
}

$m = new Main();
$m->fizzbuzz();
