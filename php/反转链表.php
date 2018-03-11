<?php
class ListNode
{
    public $val;
    public $next = null;
    public function __construct($x)
    {
        $this->val = $x;
    }
}

function ReverseList($pHead)
{
    if ($pHead == null) {
        return null;
    }
    $pNode = $pHead;
    $pPre  = null;
    while ($pHead != null) {
        $pTmp        = $pHead->next;
        $pHead->next = $pPre;
        $pPre        = $pHead;
        $pHead       = $pTmp;
    }
    return $pPre;
}
$pHead                   = new ListNode(1);
$pHead->next             = new ListNode(2);
$pHead->next->next       = new ListNode(3);
$pHead->next->next->next = new ListNode(4);

var_dump($pHead);
$pReHead = ReverseList($pHead);
var_dump($pReHead);
