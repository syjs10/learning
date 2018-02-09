class Solution(object):
    def reverseWords(self, s):
        """
        :type s: str
        :rtype: str
        """
        arr = s.split(' ')
        arr1 = []
        for x in arr:
            arr1.append(x[::-1])
        return ' '.join(arr1)
