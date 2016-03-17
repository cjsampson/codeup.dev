-- DISTINCT 
SELECT DISTINCT title FROM titles;

--Sort selection from above alphabetically
SELECT title 
FROM titles
GROUP BY title;

-- lname starts AND ends with E
SELECT first_name, last_name
FROM employees 
WHERE last_name LIKE 'E%'
AND last_name LIKE '%E';

--Unique last names start/finish with 'E'
SELECT first_name, last_name
FROM employees 
WHERE last_name LIKE 'E%'
AND last_name LIKE '%E'
GROUP BY last_name;