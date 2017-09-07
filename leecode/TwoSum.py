# O(n^2)
def twoSum(nums, target):
    """
    :type nums: List[int]
    :type target: int
    :rtype: List[int]
    """
    for i in range(len(nums)-1) :
        for j in range(1, len(nums)) :
            if (target == nums[i] + nums[j]) :
                return [i, j]
    return []
# O(n)
def twoSum(nums, target):
    """
    :type nums: List[int]
    :type target: int
    :rtype: List[int]
    """
    temp = {}
    for i in range(len(nums)) :
        if nums[i] in temp:
            return [temp[nums[i]], i]
        else :
            temp[target - nums[i]] = i;
