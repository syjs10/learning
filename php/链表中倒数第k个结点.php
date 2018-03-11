<?php
/*class ListNode{
var $val;
var $next = NULL;
function __construct($x){
$this->val = $x;
}
}*/
function FindKthToTail($head, $k)
{
    if ($head == null) {
        return null;
    }
    $p1 = $head;
    $p2 = $head;
    if ($k < 1) {
        return null;
    }
    $k--;
    while ($k--) {
        if ($p1->next != null) {
            $p1 = $p1->next;
        } else {
            return null;
        }
    }
    while ($p1->next != null) {
        $p1 = $p1->next;
        $p2 = $p2->next;
    }
    return $p2;
}
