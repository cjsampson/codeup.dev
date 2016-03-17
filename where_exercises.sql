-- Return fname 'Irena', 'Vidya', or 'Maya'
SELECT first_name, last_name
FROM employees
WHERE first_name
IN ('Irena', 'Vidya', 'Maya');

-- Return employees with a last name that starts with E
SELECT first_name, last_name
FROM employees
WHERE last_name LIKE 'E%';

-- Return employees hired in the 90's
SELECT first_name, last_name
FROM employees
WHERE hire_date 
BETWEEN '1990-01-01' AND '1999-12-31';

-- Return employees born on Christmas
SELECT first_name, last_name
FROM employees
WHERE birth_date 
LIKE '%12-25';

-- Return employees with a 'q' in their last name
SELECT first_name, last_name
FROM employees
WHERE last_name
LIKE 'Q%';


-- Replace IN with OR
SELECT first_name, last_name
FROM employees
WHERE first_name =  'Irena'
OR first_name = 'Vidya'
OR first_name = 'Maya';

-- Add condition to find everybody with those names who is also male
SELECT first_name, last_name, gender
FROM employees
WHERE gender =  'M'
AND  first_name IN (
	'Maya', 'Irena', 'Vidya' );

-- All employees whose last name starts or ends with 'E'
SELECT first_name, last_name
FROM employees 
WHERE last_name LIKE 'E%'
OR last_name LIKE '%E';

-- lname starts AND ends with E
SELECT first_name, last_name
FROM employees 
WHERE last_name LIKE 'E%'
AND last_name LIKE '%E';

-- hired in 90's and born on Xmas
SELECT first_name, last_name, hire_date, birth_date
FROM employees 
WHERE birth_date LIKE '%12-25'
AND hire_date LIKE '199%';

-- Last Name has 'Q' but not 'QU'
SELECT first_name, last_name
FROM employees 
WHERE last_name NOT LIKE '%QU%'
AND last_name LIKE '%Q%';

