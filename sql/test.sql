SELECT s.emp_no,s.salary,s.from_date,s.to_date,d.dept_no
FROM  salaries s, dept_manager d
WHERE d.to_date='9999-01-01'
AND s.to_date='9999-01-01'
AND d.emp_no = s.emp_no;