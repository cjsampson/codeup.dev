-- ORDER BY first_name
SELECT first_name, last_name
FROM employees
WHERE first_name
IN ('Irena', 'Vidya', 'Maya') 
AND gender = "m"
ORDER BY first_name;

-- ORDER BY first_name and last_name
SELECT first_name, last_name
FROM employees
WHERE first_name
IN ('Irena', 'Vidya', 'Maya') 
AND gender = "m"
ORDER BY first_name;

-- ORDER BY last_name, then first
SELECT first_name, last_name
FROM employees
WHERE first_name
IN ('Irena', 'Vidya', 'Maya') 
AND gender = "m"
ORDER BY last_name, first_name;

-- ORDER BY emp_no, doesn't change
SELECT first_name, last_name
FROM employees 
WHERE last_name LIKE 'E%'
OR last_name LIKE '%E'
ORDER BY emp_no;

-- ORDER BY emp_no, reverse sort order (DESC)
SELECT first_name, last_name
FROM employees 
WHERE last_name LIKE 'E%'
OR last_name LIKE '%E'
ORDER BY emp_no DESC;

-- ORDER BY oldest, and 
SELECT first_name, last_name, hire_date, birth_date
FROM employees 
WHERE birth_date LIKE '%12-25'
AND hire_date LIKE '199%'
ORDER BY birth_date ASC, 
	      hire_date DESC;

-- Unique lnames without qu
SELECT last_name
FROM employees 
WHERE last_name NOT LIKE '%QU%'
AND last_name LIKE '%Q%'
GROUP BY last_name;

