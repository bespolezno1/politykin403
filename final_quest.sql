SELECT employees.last_name, employees.hire_date FROM employees WHERE (employees.last_name LIKE '%er%') AND (employees.hire_date<'1996-01-01');
