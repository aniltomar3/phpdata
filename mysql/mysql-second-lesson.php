Key
* It is an attribute.
* It uniquely identify any two tuples in the table.

CANDIDATE KEY
A candidate key is a set of attributes (or attribute) which uniquely identify the tuples in table.
Eg- Aadhar card,Rollno,License,phoneno,registerationno

PRIMARY KEY
* It always has unique data.
* It can't have NULL value.

FOREIGN KEY
* It is use to link two tables together.
* A foreign key in one table used to point PRIMARY KEY in another table.


  LIKE
  WHERE name LIKE 'a%'                 - find value starts with a
  WHERE CustomerName LIKE '%a'         - find value end with a
  WHERE name LIKE '_a%'                - find value where a in second position  
  WHERE name LIKE 'a__%'               - find value start with a and 3 character in length
  WHERE name LIKE 'a%o'                - find value start with a and ends with o

// NULL
if a field is optional in form then value is set null
where column_name IS NULL
where column_name IS NOT NULL


// AND, OR , NOT

where NOT country='' and NOT country='';
where country='' and(city='' or city= '');


Aggregate functions
GROUP BY
It is used in conjunction with aggregate function.
eg- id,name,age,city   - 
1) count each city how many students come? 
SELECT count(name) as total,city FROM `student_data` GROUP BY city


2) student age >20
HAVING CLAUSE- works on group by result always after group by
1) show group by data >5

// MIN/ MAX
select min(column_name) from table where...


// COUNT/ AVG/ SUM
select count(column_name) from table where...     // count records
null values are not counted


// ORDER BY    - by default asc always after group by

order by country,customername   -first order asc by country if country name same then customer name asc.

// IN Operator-  short form of or operator
select * from customer where country IN(select * from supplier);






