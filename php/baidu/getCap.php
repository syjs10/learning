<?php
// $arr = array();
while (fscanf(STDIN, "%d", $num) == 1) {
    $str = '';
    for ($i = 0; $i < $num; $i++) {
        $str .= "%d ";
    }
    $arr = fscanf(STDIN, $str);
}

sort($arr);
$min3  = $arr[0];
$count = 1;
foreach ($arr as $k) {
    if ($k > $min3 && $count != 3) {
        $min3  = $k;
        $count = $count + 1;
    }
    if ($count == 3) {
        echo $k;
        break;
    }
}
if ($count < 3) {
    echo -1;
}
