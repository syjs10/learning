<?php
class TreeNode
{
    public $val;
    public $left  = null;
    public $right = null;
    public function __construct($val)
    {
        $this->val = $val;
    }
}
function reConstructBinaryTree($pre, $vin)
{
    if (count($pre) === 0 || count($vin) === 0) {
        return null;
    }
    $root        = new TreeNode($pre[0]);
    $leftLen     = array_search($pre[0], $vin);
    $rightLen    = count($vin) - $leftLen - 1;
    $preLeft     = array_slice($pre, 1, $leftLen);
    $preRight    = array_slice($pre, $leftLen + 1, $rightLen);
    $vinLeft     = array_slice($vin, 0, $leftLen);
    $vinRight    = array_slice($vin, $leftLen + 1, $rightLen);
    $root->left  = reConstructBinaryTree($preLeft, $vinLeft);
    $root->right = reConstructBinaryTree($preRight, $vinRight);

    return $root;
}
$pre = array(1, 2, 4, 7, 3, 5, 6, 8);
$vin = array(4, 7, 2, 1, 5, 3, 8, 6);
var_dump(reConstructBinaryTree($pre, $vin));
