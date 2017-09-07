
# Definition for a binary tree node.
# class TreeNode(object):
#     def __init__(self, x):
#         self.val = x
#         self.left = None
#         self.right = None

#wrong
class Solution(object):
    temp = [];
    def findTarget(self, root, k):
        """
        :type root: TreeNode
        :type k: int
        :rtype: bool
        """
        return fdt(root, k)

    def fdt(self, root, k) :
        if None != root.left or None != root.right :
            if None != root.left :
                self.fdt(root.left, k)
            if None != root.right :
                self.fdt(root.right, k)

        if self.isRes(root.val, k) :
            return True
        else :
            return False

    def isRes(self, value , k) :
        if value in self.temp :
            return True
        else :
            self.temp.append(k - value)
            return False
#true
def findTarget(self, root, k):
    """
    :type root: TreeNode
    :type k: int
    :rtype: bool
    """
    tree, temp= [root], []
    for x in tree:
        if x.val in temp :
            return True
        temp.append(k - x.val)
        if x.left:
            tree.append(x.left)
        if x.right:
            tree.append(x.right)
    return False
