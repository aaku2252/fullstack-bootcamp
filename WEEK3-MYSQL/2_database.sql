use user;
create table products(product_name varchar(30) not null,product_price decimal(5,2) not null,quantity int, mfg date);



-- chnage the constraints of a table
alter table products modify mfg timestamp  ;
alter table products modify quantity decimal(2,0) check(quantity>5);
select * from products; 
-- desc products;

delete from products;
-- it sets autocommit or autosave to off; 
set autocommit = 0;

insert into products(product_name,product_price,quantity,mfg) values ("Notebook",49.999,8,'2019:11:01 12:00:31'),("Book",99.987,10,"2018:12:11 12:03:21");

rollback;