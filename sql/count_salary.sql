SELECT emp_no, COUNT(emp_no) AS t
FROM salaries
GROUP BY emp_no HAVING T > 15;