<?php
function replaceSpace($str)
{
    // write code here
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == ' ') {
            $count++;
        }
    }
    // echo $count;
    $len = strlen($str);
    $i = $len -1;
    $j = $len - 1 + $count * 2;
    for (; $i != $j && $i>=0; $i--, $j--) {
        if($str[$i] == ' ') {
            $str[$j--] = '0';
            $str[$j--] = '2';
            $str[$j] = '%';
        } else {
            $str[$j] = $str[$i];
        }

    }
    return $str;

}
$str = "abc def sddasf s";
echo replaceSpace($str);
