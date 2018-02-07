<?php
$num = 0;
$arr = array();
while (fscanf(STDIN, "%d", $num) == 1) {
    $str = '';
    for ($i = 0; $i < $num; $i++) {
        $str .= "%d ";
    }
    $arr = fscanf(STDIN, $str);
}
$max = 0;
$sum = 0;
for ($i = 0; $i < $num - 2; $i++) {
    $add = abs($arr[$i] - $arr[$i + 1]) + abs($arr[$i + 1] - $arr[$i + 2]) - abs($arr[$i] - $arr[$i + 2]);

    if ($max < $add) {
        $max = $add;
    }
    // echo abs($arr[$i] - $arr[$i + 1]);
}
for ($i = 0; $i < $num - 1; $i++) {
    $add = abs($arr[$i] - $arr[$i + 1]);
    $sum = $sum + $add;
}
$sum = $sum - $max;
echo $sum;
