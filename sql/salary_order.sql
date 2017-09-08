SELECT e.emp_no, s.salary
FROM employees e
INNER JOIN salaries s
ON e.emp_no = s.emp_no AND e.hire_date = s.from_date
ORDER BY e.emp_no DESC;