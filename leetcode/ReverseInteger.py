class Solution(object):
    def reverse(self, x):
        """
        :type x: int
        :rtype: int
        """
        if (x < -2147483648 or x > 2147483647):
            return 0
        sign = x < 0 if 1 else 0
        x = str(abs(x))
        s = x[::-1]
        s = int(s)
        if sign:
            s = 0 - s
        if (s < -2147483648 or s > 2147483647):
            return 0
        return s

