<?php

/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function printListFromTailToHead($head)
{
    // write code here
    $arr = array();
    $res = array();
    $tmp = $head;
    while ($tmp) {
        array_push($arr, $tmp->val);
        $tmp = $tmp->next;
    }
    while(count($arr)){
        $a = array_pop($arr);
        array_push($res, $a);
    }
    return $res;
}