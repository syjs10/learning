<?php
/**
 *
 */
class Node
{

    public $value = 0;
    public $line  = 0;
    public $next  = null;
}

function buildTree($list, $node1, $node2, $line)
{
    if ($list == null) {
        $list        = new Node();
        $list->value = $node1;
    }
    $head = $list;
    while ($list != null) {
        if ($list->value == $node1) {
            $list->line = $line;
            if ($list->next == null) {
                $list->next        = new Node();
                $list->next->value = $node2;
            } else {
                $tmp       = new Node();
                $tmp->next = $list;
                $head      = $tmp;
            }

            return $head;
        }
        if ($list->value == $node2) {
            $list->line = $line;
            if ($list->next == null) {
                $list->next        = new Node();
                $list->next->value = $node1;
            } else {
                $tmp       = new Node();
                $tmp->next = $list;
                $head      = $tmp;
            }

            return $head;
        }
        $list = $list->next;
    }
    return false;

}
function findMaxLine($list, $node1, $node2)
{
    if ($list == null) {
        return 0;
    }
    $max = 0;
    while ($list != null && ($list->value == $node1 || $list->value == $node1)) {
        if ($max < $list->line) {
            $max = $list->line;
        }
        $list = $list->next;
        if ($list->value == $node1 || $list->value == $node2) {
            // print($max);
            return $max;
        }
    }

    return false;
}
$handle = fopen("php://stdin", "r");
$s      = fgets($handle);
$num    = (int) $s;
$s      = fgets($handle);
$head   = null;
for ($i = 0; $i < $num - 1; $i++) {
    $a    = explode(" ", $s);
    $head = buildTree($head, (int) $a[0], (int) $a[1], (int) $a[2]);
    $s    = fgets($handle);
}

$num = (int) $s;
$s   = fgets($handle);
// var_dump($head);
$arr = array();
for ($i = 0; $i < $num; $i++) {
    $a = explode(" ", $s);
    array_push($arr, findMaxLine($head, (int) $a[0], (int) $a[1]));
    $s = fgets($handle);
}
foreach ($arr as $key => $value) {
    print($value . " ");
}
fclose($handle);
