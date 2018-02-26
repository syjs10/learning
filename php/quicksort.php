<?php
// function quickSort($arr)
// {
//     $length = count($arr);
//     if ($length <= 1) {
//         return $arr;
//     }
//     $l   = 0;
//     $r   = $length - 1;
//     $tmp = $arr[0];
//     while ($l < $r) {
//         while ($l < $r && $arr[$r] >= $tmp) {
//             $r--;
//         }
//         $arr[$l] = $arr[$r];
//         while ($l < $r && $arr[$l] < $tmp) {
//             $l++;
//         }
//         $arr[$r] = $arr[$l];
//     }
//     $arr[$l] = $tmp;
//     $left    = quickSort(array_slice($arr, 0, $l + 1));
//     $right   = quickSort(array_slice($arr, $l + 1, $length - $l - 1));
//     return array_merge($left, $right);
//     // return $arr;
// }
//
//
//

function quickSort($arr)
{
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    $l   = 0;
    $r   = $length - 1;
    $tmp = $arr[$l];
    while ($l < $r) {
        while ($l < $r && $tmp <= $arr[$r]) {
            $r--;
        }
        $arr[$l] = $arr[$r];
        while ($l < $r && $tmp > $arr[$l]) {
            $l++;
        }
        $arr[$r] = $arr[$l];
    }
    $arr[$l] = $tmp;
    $left    = quickSort(array_slice($arr, 0, $l + 1));
    $right   = quickSort(array_slice($arr, $l + 1, $length - $l - 1));
    return array_merge($left, $right);
}

$val = array(3, 2, 1, 4, 5, 6, 2);
var_dump(quickSort($val));
