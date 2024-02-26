-- DDL COMMANDDS
-- create database
create database user;

-- Selecting database
use user;

-- create table
create table user_details(user_id varchar(20),name varchar(300),address varchar(500), phone bigint);

-- add new column
alter table user_details add dob date; 

-- chnage the name of the column
alter table user_details rename column phone to mobile;

-- drop the column, chnage the structure of the database , and delete the whole column

alter table user_details drop column address;

-- reanaming the table

alter table user_details rename  to userdata;
alter table userdata rename to user_details;
-- alter database user rename to newuser;


-- dropping the whole table, it deletes the whole table. 
--  drop table user_details;

-- dropping the hwole database

-- drop database user;

-- show tables;



-- constraints
create table user_registration (id varchar(12) primary key, name varchar(30) not null,age int check(age>0),city varchar(50) default 'Pune'  );
insert into user_registration (id,name,age) values ("P110", "Akash",15); 


select * from user_registration;





