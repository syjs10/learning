<?php

function Fibonacci($n)
{
    $one = 1;
    $two = 1;
    $fib = 0;
    if ($n == 1) {
        return $one;
    }
    if ($n == 2) {
        return $two;
    }
    $n = $n - 2;
    while ($n--) {
        $fib = $one + $two;
        $one = $two;
        $two = $fib;
    }
    return $fib;
}
echo Fibonacci(4);
