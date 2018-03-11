<?php
function reOrderArray($array)
{
    $l = 0;
    $r = count($array) - 1;
    while ($l < $r) {
        while ($l < $r && $array[$l] & 0x01 == 1) {
            $l++;
        }
        while ($l < $r && $array[$r] & 0x01 == 0) {
            $r--;
        }
        $tmp       = $array[$r];
        $array[$r] = $array[$l];
        $array[$l] = $tmp;
    }
    return $array;
}
