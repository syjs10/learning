<?php

function Find($target, $array)
{
    // write code here
    // echo count($array[0]);
    $col = count($array[0]) - 1;
    for($i = 0; $i < count($array); $i++) {
        for($j = $col; $j >= 0; $j--) {
            if($array[$i][$j] < $target) {
                break;
            }
            if($array[$i][$j] > $target) {
                $col--;
            }
            if($array[$i][$j] == $target) {
                return true;
            }
        }
    }
    return false;
}
var_dump(Find(7,[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]]));
// echo 'test';