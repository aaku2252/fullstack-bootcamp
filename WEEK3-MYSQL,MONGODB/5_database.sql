create database class;
use class;
create table employee(id varchar(10) primary key,name varchar(20),phone bigint);

-- reference connection between two tables
create table department(d_id varchar(10) primary key,d_name varchar(30),id varchar(10),foreign key(id) references employee(id));

-- insert data in table
insert into employee values ('E101','Ravi',9090909087),('E102','Raj',9090909088),('E103','Ravinder',9090909089),('E104','Rakesh',9090909090),('E105','Rajesh',9090909091);

-- insert into department table where reference is taken
insert into department values ('D101','HR','E101'),('D102','TECH','E102'),('D103','ADM','E103'),('D104','HR','E104'),('D105','TECH','E105');
delete from department where d_id = 'D105';
select * from employee inner join department on employee.id = department.id ;

select employee.name,employee.phone,department.d_name from employee inner join department on employee.id = department.id;
-- union function for full outer join

select * from employee union select * from department;