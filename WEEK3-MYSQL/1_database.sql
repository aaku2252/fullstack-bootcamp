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



-- show tables;



-- constraints
create table user_registration (id varchar(12) primary key, name varchar(30) not null,age int check(age>0),city varchar(50) default 'Pune'  );
insert into user_registration (id,name,age) values ("P110", "Akash",15); 
insert into user_registration (id,name,age,city) values ("P111", "Akash",15,'Delhi'); 
insert into user_registration (id,name,age,city) values ("P112", "",15,'Jaipur'); 
insert into user_registration (id,name,age,city) values ("P113",'',15,'Jaipur'); 
alter table user_registration add phone bigint unique;
insert into user_registration (id,name,age,city,phone) values ("P114",'Somat',18,'Jaipur',9897984321); 
-- we can add multiple values
insert into user_registration (id,name,age,phone) values ("P115",'Ravi',18,9897984331),("P116",'Vinay',18,9897984831); 
-- update an exisiting  table data
update user_registration set phone=9876549000,age = 29 where id = "P110";

-- Chnages all the files where the city equals to the Pune
update user_registration set age = 34 where city = "Pune";
delete from user_registration where id = "P113";
select * from user_registration;


-- It sets the safe mode to off
-- SET SQL_SAFE_UPDATES = 0;

-- show databases;
use user;
-- show tables;

-- describe table
desc user_details;
desc user_registration;











