<?php
function NumberOf1($n)
{
    $n     = $n << 1;
    $count = 0;
    while ($n >> 1) {
        $count++;
    }
    return $count;
}
echo NumberOf1(2);
