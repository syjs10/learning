<?php
function printFrom1ToNDigits($n)
{
    if (n <= 0) {
        return;
    }
    $number = "";
    // for ($i = 0; $i < $n; $i++) {

    // }
}
function from0To9($number, $n)
{
    if ($n == 0) {
        return;
    }
    for ($i = 0; $i < 10; $i++) {
        $number[$n] = $i;
        from0To9($number, $n - 1);
        var_dump($number);
    }
}
$number = array();
from0To9($number, 2);
