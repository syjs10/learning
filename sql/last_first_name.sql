SELECT last_name, first_name, dept_no
FROM dept_emp d, employees e
WHERE d.emp_no = e.emp_no
AND d.dept_no IS NOT NULL;




-- INNER JOIN 两边表同时有对应的数据，即任何一边缺失数据就不显示。
-- LEFT JOIN 会读取左边数据表的全部数据，即便右边表无对应数据。
-- RIGHT JOIN 会读取右边数据表的全部数据，即便左边表无对应数据。
SELECT e.last_name, e.first_name, d.dept_no
FROM employees e
LEFT JOIN dept_emp d
ON e.emp_no = d.emp_no;