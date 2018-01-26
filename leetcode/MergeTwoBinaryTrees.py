# Definition for a binary tree node.
# class TreeNode(object):
#     def __init__(self, x):
#         self.val = x
#         self.left = None
#         self.right = None

class Solution(object):
    def mergeTrees(self, t1, t2):
        """
        :type t1: TreeNode
        :type t2: TreeNode
        :rtype: TreeNode
        """
        if t1 or t2:
            new = TreeNode((t1.val if t1 else 0) + (t2.val if t2 else 0))
            new.left = self.mergeTrees((t1 and t1.left), (t2 and t2.left))
            new.right = self.mergeTrees((t1 and t1.right), (t2 and t2.right))
            return new
        return None
