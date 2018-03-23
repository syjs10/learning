<?php
function getLen($x1, $y1, $x2, $y2)
{
    return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
}
// function isEqul($len1, $len2)
// {
//     # code...
// }
while (fscanf(STDIN, "%d", $n) == 1) {
    // $ans = 0;
    for ($i = 0; $i < $n; $i++) {
        //read whole line
        fscanf(STDIN, "%[^\n]s", $line);
        //split line to array
        $x = explode(" ", trim($line));
        fscanf(STDIN, "%[^\n]s", $line);
        $y = explode(" ", trim($line));
        if (getLen($x[0], $y[0], $x[1], $y[1]) - getLen($x[0], $y[0], $x[2], $y[2]) < 1e-8 &&
            getLen($x[0], $y[0], $x[1], $y[1]) - getLen($x[1], $y[1], $x[3], $y[3]) < 1e-8 &&
            getLen($x[0], $y[0], $x[1], $y[1]) - getLen($x[2], $y[2], $x[3], $y[3]) < 1e-8) {
            if (pow(getLen($x[0], $y[0], $x[1], $y[1]), 2) * 2 - pow(getLen($x[2], $y[2], $x[1], $y[1]), 2) < 1e-8) {
                echo "YES";
                continue;
            }
        }
        echo "NO";

    }
}
