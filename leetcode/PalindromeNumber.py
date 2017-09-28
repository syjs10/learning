class Solution(object):
    def isPalindrome(self, x):
        """
        :type x: int
        :rtype: bool
        """
        x = str(x)
        for i in range(int(len(x) / 2 + 1)):
            if x[i] != x[-1*i-1]:
                return False

        return True