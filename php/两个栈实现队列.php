<?php
$a = array();
$b = array();
function mypush($node)
{
    // write code here
    global $a;
    global $b;

    array_push($a, $node);
    // var_dump($a);
}
function mypop()
{
    // write code here
    global $a;
    global $b;
    // var_dump($a);
    while(!empty($a)) {
        array_push($b, array_shift($a));
    }
   return array_shift($b);
}

mypush(123);
mypush(234);
echo mypop();
mypush(453);
echo mypop();
echo mypop();
