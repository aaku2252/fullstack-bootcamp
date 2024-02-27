set autocommit = 0;
set sql_safe_updates= 0;
use user;
-- 1. create table
create table employee(emp_id varchar(10) primary key, emp_name varchar(30) not null,emp_job varchar(30) not null,emp_salary int,join_date date,emp_age int check(emp_age>20));

-- 2. insert table
insert into employee values ("E400001","Gaurav","data-analyst",70000,"2021-6-10",40),("E400002","Gaurav","data-analyst",70000,"2021-6-10",30),("E400003","Gaurav","data-analyst",70000,"2021-6-10",30),("E400004","Gaurav","data-analyst",70000,"2021-6-10",40),("E400005","Vijay","data-analyst",70000,"2021-6-10",40),("E400007","Amit","data-analyst",70000,"2021-6-10",40);
insert into employee values ("E400006","Akash","web-developer",70000,"2021-6-10",32);

-- 3. desc table
desc employee;

-- 4 show all records from table
select * from employee;

-- 5. update the salary of the employee whose age is grester than 30
update employee set emp_salary= 100000 where emp_age>30;

-- 6. reaname column name emp_job by emp_des
alter table employee rename column emp_job to emp_des;
 
-- 7. add new column 

alter table employee add contact_no int;

-- 8. remove newly added column 


alter table employee drop contact_no;

-- 9. delete any single record from table

delete from employee  where emp_id = 'E400006';

-- 10. display all items

select * from employee where emp_salary>=30000 and emp_salary<=80000;

-- 11 desiplay all items wherer name of the employee starts with a
select * from employee where emp_name like 'A%';



select * from employee;

-- select the distinct and differetn values
select distinct emp_name,emp_age from employee;

-- to count the number of the occurences
select count(emp_salary) from employee where emp_salary >70000;

-- logical operators 
select * from employee where emp_name= "Akash" and emp_salary>=50000;

-- between , in , like operators
select * from employee where emp_salary between 50000 and 80000;

select count(*) from employee where emp_des in ("data-analyst","AI-developer");

select * from employee where emp_name like "A%";

-- update the name of the employees
update employee set emp_name="Rajesh" where emp_id = "E400001";

-- find the data where name is gaurav and salary is 70000
select * from employee where emp_name like "G%" && emp_des = "data-analyst";

-- update name of employee
update employee set emp_name = "Sandeep" where emp_name like "G%" && emp_salary>=80000;

-- find the updated name
select * from employee where emp_name like "A%"  and not emp_des = "data-analyst";

-- order by function to get in ascending and descending order
select * from employee order by emp_name asc;
select sum(emp_salary),emp_salary,emp_des,emp_age from employee  group by emp_salary , emp_des,emp_age;


-- Aggregate function- count,sum,avg,min function
select count(*) from employee where emp_name like "a%";
select sum(emp_salary) from employee where emp_des = "data-analyst";
select avg(emp_salary) from employee where emp_des = "data-analyst";
select max(emp_salary) from employee where emp_des = "data-analyst";
select min(emp_salary) from employee where emp_des = "data-analyst";

-- updated the name of gaurav in databse
update employee set emp_name = "Manoj" where emp_id = "E400002";


-- having clause 
select count(emp_salary),emp_salary  from employee group by emp_salary having emp_salary=70000;

-- find records from employee whose salary is greater than average salary
select * from employee where emp_salary > (select avg(emp_salary) from employee);

-- update the table
update employee set emp_salary= 50000 where emp_id = "E400001";

-- any/all in subqueries
select emp_name from employee where emp_id= any(select emp_id from employee where emp_salary< (select avg(emp_salary) from employee ));

select emp_name from employee where emp_id= all(select emp_id from employee where emp_salary=50000);

select * from class;
alter table class add column class_id varchar(10); 



