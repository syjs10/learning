<?php

function minNumberInRotateArray($arr)
{
    $index1   = 0;
    $index2   = count($arr) - 1;
    $indexMid = 0;
    $tmp      = 0;
    while ($arr[$index1] >= $arr[$index2]) {
        if ($index2 - $index1 == 1) {
            $indexMid = $index1;
            break;
        }
        $indexMid = ($index2 + $index1) / 2;
        if ($arr[$indexMid] >= $arr[$index1]) {
            $index1 = $indexMid;
        } elseif ($arr[$indexMid] <= $arr[$index2]) {
            $index2 = $indexMid;
        }
        $tmp = $indexMid;
    }
    return $arr[$tmp];
}

var_dump(minNumberInRotateArray(array(3, 4, 5, 1, 2)));
