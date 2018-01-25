class Solution(object):
    def anagramMappings(self, A, B):
        """
        :type A: List[int]
        :type B: List[int]
        :rtype: List[int]
        """
        k = []
        for i in range(0, len(A)):
            for j in range(B,len(B)):
                if A[i] == B[j]:
                    k[i]=j



