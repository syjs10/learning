class TreeNode(object):
    def __init__(self, x):
        self.val = x
        self.left = None
        self.right = None

class Solution(object):

    def constructMaximumBinaryTree(self, nums):
        """
        :type nums: List[int]
        :rtype: TreeNode
        """
        root = TreeNode(None)
        def addNode(root, nums):
            if not nums:
                return
            maxIndex = nums.index(max(nums))
            root.val = max(nums)
            if (nums[:maxIndex]):
                root.left=TreeNode(None)
                addNode(root.left, nums[:maxIndex])
            if (nums[maxIndex+1:]):
                root.right=TreeNode(None)
                addNode(root.right, nums[maxIndex+1:])
        addNode(root,nums)
        return root

test = Solution()
print(test.constructMaximumBinaryTree([1,2,3,4]).right)
