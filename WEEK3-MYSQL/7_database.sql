
-- select the user database
select user from mysql.user;

-- create a user named akash and set a password
create user 'akash'@'localhost' identified by 'pass1234';

-- grant all privileges to the user akash
grant all privileges on *.* to 'akash'@'localhost';


-- revoke create and update permissions from the user
revoke Create,update on *.* from 'akash'@'localhost';
use class;
show tables;
select * from employee order by phone desc;
show processlist;
