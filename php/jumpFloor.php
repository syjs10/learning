<?php
function jumpFloor($num)
{
    if ($num <= 0) {
        return 0;
    }
    if ($num == 1) {
        return 1;
    }
    if ($num == 2) {
        return 2;
    }
    $one = 1;
    $two = 2;
    $sum = 0;
    $num = $num - 2;
    while ($num--) {
        $sum = $one + $two;
        $one = $two;
        $two = $sum;
    }
    return $sum;
}
echo jumpFloor(5);
