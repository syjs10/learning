class Solution(object):
    def complexNumberMultiply(self, a, b):
        """
        :type a: str
        :type b: str
        :rtype: str
        """
        a = a.split('+')
        a[1] = a[1].split('i')[0]
        b = b.split('+')
        b[1] = b[1].split('i')[0]
        a[0]=int(a[0])
        a[1]=int(a[1])
        b[0]=int(b[0])
        b[1]=int(b[1])
        q = a[0] * b[0] - a[1] * b[1]
        i = a[0] * b[1] + a[1] * b[0]
        return '' + str(q) + '+' + str(i) + 'i'