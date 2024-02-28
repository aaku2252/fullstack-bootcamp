set autocommit = 0;
set sql_safe_updates = 0;
create table class(name varchar(15),age int);

savepoint A;
insert into class values("chetan",16),("raju",15),("ajay",13);

savepoint B;
delete from class where age = 13;
savepoint C;
alter table class modify age int check(age>=14);
insert into class values("chetan",16),("raju",15),("ajay",14);
savepoint D;
delete from class where age=16;
savepoint E;

select * from class;
rollback to savepoint D;

select * from class;




-- it saves the data in database; once committed data can not be reverted back using rollback
-- commit;
-- delete the whole table
-- drop table class;