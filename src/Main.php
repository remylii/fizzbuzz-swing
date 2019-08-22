<?php
namespace FizzBuzzSwing;

class Main
{
    public function boot()
    {
        for ($i = 1; $i <= 15; $i++) {
            $content = $this->fizzbuzz($i);

            $this->output($content);
        }
    }

    public function fizzbuzz($n)
    {
        $res = '';
        if ($n%3 === 0) {
            $res .= 'Fizz';
        }

        if ($n%5 === 0) {
            $res .= 'Buzz';
        }

        if ($res === '') {
            $res = $n;
        }

        return $res;
    }

    public function output($content)
    {
        echo $content;
    }
}
